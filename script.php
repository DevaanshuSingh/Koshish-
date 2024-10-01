<?php
    // session_start();
?>
<!-- In Js { -->
<!-- Trying To Add the feature not only select p1 or p2 instead of Select P${Id} this is versatile Which Is Needed -->
<script>
    let fetch_pos_ans;
    let pos_array = new Array(4);
    let send_as_id = 1;

    window.onload = async function () {
        choosedBcg();
        for (let i = 0; i < pos_array.length; i++) {
            fetch_pos_ans = await fetch_pos(send_as_id);  // Wait for the response
            pos_array[i] = fetch_pos_ans;
            // alert(`id ${send_as_id}`);  // Show alert with the fetched value
            send_as_id++;
        }
        // alert(`Array Of Positions ${pos_array}`);
    }


    function updateBcg(bcg_Color) {
        // alert(`bcg Is ${bcg_Color}`);
        // alert(`Type Of BCg Is ${typeof(bcg_Color)}`);
        const xhr = new XMLHttpRequest();
        xhr.open(`POST`, `updateBcg.php`, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                // alert(`updated Bcg Successfully and RESPONSE is: ${xhr.responseText}`);
            }
            else
                alert(`Not Updated BCG`);
        }
        xhr.send(`bcg_Color=` + bcg_Color);
    }

    let bcgDb = null;

    function choosedBcg() {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'fetch_bcg.php', true);  // Replace 'your_endpoint_here' with the actual URL
        xhr.onload = function () {
            if (xhr.status === 200) {
                bcgDb = xhr.responseText;
                document.body.style.backgroundColor = bcgDb;
                // document.body.style.backgroundColor = bcgDb;  // Use the response from the server as the background color
                // alert(`bcg is: ${bcgDb}`);
            }
        };

        // Send the request
        xhr.send();
    }

    function fetch_pos(nowId) {
        // alert(`Now Id ${nowId}`);
        return new Promise((resolve, reject) => {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'fetch_position.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    showOnload(nowId, xhr.responseText);
                    resolve(xhr.responseText);  // Resolve the promise with the response
                    // alert(`Inside fetch_pos -> Id: ${nowId}\n Pos: ${xhr.responseText}`);  // Show alert inside fetch_pos
                } else {
                    reject(`Error: ${xhr.status}`);  // Reject the promise if an error occurs
                }
            };
            xhr.send('idForGetPos=' + nowId);
        });
    }/*GPT */

    function showOnload(nowId, pos) {
        // Get the whole grid and the specific player div
        let wholeGrid = document.getElementById(`grid_${pos}`);
        let playerDiv = wholeGrid.querySelector(`.p${nowId}`);

        if (playerDiv) {
            // playerDiv.style.transition: "background-color 1s ease";
            if (nowId == 1)
                playerDiv.style.backgroundColor = 'red';
            else if (nowId == 2)
                playerDiv.style.backgroundColor = 'green';
            else if (nowId == 3)
                playerDiv.style.backgroundColor = 'yellow';
            else if (nowId == 4)
                playerDiv.style.backgroundColor = 'blue';
        }
    }

    function getId() {
        alert(`Sending Id: ${nowId}`);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'changeId.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                nowId = xhr.responseText;
                alert(`Reciving Id: ${nowId}`);
                diceValue(nowId);
            }
            else
                alert(`Response From Server While Changing Id :`.xhr.response);
        };
        xhr.send(`nowId=` + nowId);//Changing Id
    }

    function diceValue(nowId) {
        // Came From Script.php
        var dice = Math.floor(Math.random() * 6) + 1;
        document.getElementById('showValue').value = dice;//4
        posFix(nowId, dice+fetch_pos_ans);
    }

    let wholeGrid;
    let nxtPos;
    let pos = nxtPos;//Get Position From Database (There is 1 Default Wise);
    function posFix(nowId, nxtPos) {
        // alert(`Inside posFix Function`);
        const xhr = new XMLHttpRequest();
        xhr.open(`POST`, `updatePosition.php`, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                alert(`Position Updated Of ID : ${nowId} Into ${updatedPos}`);
                changeThePosFunc(nowId, dice);
            }
            else
                alert(`Have Not Updated The Position`);
        }
        xhr.send('nowId=' + nowId + '&pos=' + nxtPos);
    }

    function changeThePosFunc(nowId, dice) {
        alert("inside change");
        wholeGrid = document.getElementById(`grid_${pos}`);
        let playerDivPrev = wholeGrid.querySelector(`.p${nowId}`);
        playerDivPrev.style.transition = 'background-color 1s ease';
        playerDivPrev.style.backgroundColor = 'rgba(0, 0, 0, 0)';

        nxtPos = pos + dice;
        wholeGrid = document.getElementById(`grid_${nxtPos}`);
        let playerDiv = wholeGrid.querySelector(`.p${nowId}`);
        if (playerDiv) {
            playerDiv.style.transition = 'background-color 1s ease';
            if (nowId == 1)
                playerDiv.style.backgroundColor = 'red';
            if (nowId == 2)
                playerDiv.style.backgroundColor = 'green';
            if (nowId == 3)
                playerDiv.style.backgroundColor = 'yellow';
            if (nowId == 4)
                playerDiv.style.backgroundColor = 'blue';
        }
        else
            alert(`.p1 - ${nxtPos} not found in grid_${nxtPos}`);
        pos = nxtPos;
    }

    function truncateTable() {
        // alert(`inside Truncate`);
        const xhr = new XMLHttpRequest();

        xhr.open('GET', 'truncateT.php', true);

        xhr.onprogress = function () {
            // alert(`Onprogress`);
        }
        xhr.onload = function () {
            // alert(`Loaded`);
        }
        xhr.send();
        location.reload();
    }

</script>