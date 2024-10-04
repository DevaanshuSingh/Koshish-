<script>

    //onload What Have TO Do
    window.onload = function () {
        choosedBcg();
        // let total = fetch(); //Try To Fetch The Count Of Ids And Store In total Variable;
        let total = 4;
        for (let i = 1; i <= total; i++) {
            fetch(i);
        }
    }

    // This Should Be Solve
    function getTotal() {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'total.php', false);

        if (xhr.status == 200) {
            alert(`Response type: ${typeof xhr.responseText}`);
            return parseInt(xhr.responseText); // Return the total as an integer
        } else {
            alert(`else part`);
            return 0; // Return 0 if there's an error
        }
        xhr.send(); // Send the request
    }

    //Bcg Section
    function updateBcg(bcg_Color) {
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
        xhr.open('GET', 'fetch_bcg.php', true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                bcgDb = xhr.responseText;
                document.body.style.backgroundColor = bcgDb;
            }
        }
        xhr.send();
    }
    //Bcg Section

    function fetch(i) {
        let store_pos;
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'fetch_Position.php', false);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                store_pos = xhr.responseText;
                show(i, store_pos);
            } else {
                alert(`Not Fetched Data`);
            }
        };
        xhr.send('idForGetPos=' + i);
        return parseInt(store_pos, 10);  // Return the position as an integer (base 10)
    }

    function show(i, store_pos) {
        let wholeGrid = document.getElementById(`grid_${store_pos}`);
        let playerDiv = wholeGrid.querySelector(`.p${i}`);
        if (playerDiv) {
            // playerDiv.style.transition = 'background-color .1s ease';
            if (i == 1)
                playerDiv.style.backgroundColor = 'red';
            if (i == 2)
                playerDiv.style.backgroundColor = 'green';
            if (i == 3)
                playerDiv.style.backgroundColor = 'yellow';
            if (i == 4)
                playerDiv.style.backgroundColor = 'blue';
        }

        else
            alert(`.p1 - ${nxtPos} not found in grid_${nxtPos}`);
        if (store_pos == 100) {
            alert(`Player ${i}Has Won The Game`);
            openDialogueBox();
        }
    }

    function getId(nowId) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'changeId.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                nowId = xhr.responseText;
                parseInt(nowId);
                updateTurn(xhr.responseText);
                diceValue(nowId);
            }
            else
                alert(`Response From Server While Changing Id :`.xhr.response);
        };
        xhr.send(`nowId=` + nowId);//Changing Id
    }

    function startFrom() {
        let startId;
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'startFrom.php?id=1', false);
        xhr.onload = function () {
            if (xhr.status == 200) {
                startId = parseInt(xhr.responseText);
            }
        }
        xhr.send();
        return parseInt(startId, 10);  // Return the position as an integer (base 10);
    }

    function diceValue(nowId) {
        var dice = Math.floor(Math.random() * 6) + 1;
        document.getElementById('showValue').value = dice;
        let currentPos = fetch(nowId);
        let newPos = dice + currentPos;
        posFix(nowId, newPos);
    }

    let nowId = startFrom();
    function updateTurn(nowId) {
        const xhr = new XMLHttpRequest();
        xhr.open(`POST`, `updateTurn.php`, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                // alert(`Updated nowTurn`);
            }
            else
                alert(`Have Not Updated nowTurn`);
        }
        xhr.send("now_turn=" + nowId);
    }

    function posFix(nowId, pos_prev_now) {
        //have to add previous position and now dice value to set a new positon so older position have to fetch and add with dice;
        const xhr = new XMLHttpRequest();
        xhr.open(`POST`, `updatePosition.php`, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                pos = parseInt(xhr.response, 10);
                show(nowId, pos_prev_now);
                // location.reload();
            }
            else
                alert(`Have Not Updated The Position`);
        }
        xhr.send('nowId=' + nowId + '&pos=' + pos_prev_now);
    }

    function truncateTable() {
        // alert(`inside Truncate`);
        const xhr = new XMLHttpRequest();

        xhr.open('GET', 'truncateT.php', true);

        xhr.onprogress = function () {
            // alert(`Onprogress`);
        }
        xhr.onload = function () {
            location.reload();
            // alert(`Loaded`);
        }
        xhr.send();
    }

</script>