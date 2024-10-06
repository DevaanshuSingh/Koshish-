<script>

    //onload What Have To Do
    window.onload = function () {
        choosedBcg();
        showDice();
        // let total = fetch(); //Try To Fetch The Count Of Ids And Store In total Variable;
        let total = 2;
        for (let i = 1; i <= total; i++) {
            fetchPos(i);
        }
    }

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

    function fetchPos(i) {
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
            openDialogueBox(nowId);
        }
    }

    function openDialogueBox(nowId) {
        let winnerContainer = document.querySelector('.winner-container');
        winnerContainer.style.display = "flex";
        let winner = document.querySelector('.player-info');
        winner.style.display = "flex";
        let img = document.getElementById('winnerImage'); 
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "getWinnerImage.php", true);
        xhr.onload = function () {
            if (xhr.status == 200) {
                let imageUrl = xhr.responseText;
                img.src = imageUrl;
                alert(`Got Winner's Image Successfully`);
                img.style.width = "100%";
                img.style.height = "100%";
                img.style.objectFit = "cover"; 
                winner.style.display = "flex";
            } else {
                alert(`Failed to get the image. Status: ${xhr.status}`);
            }
        };
        xhr.onerror = function () {
            alert('An error occurred while fetching the image.');
        };
        const formData = new FormData();
        formData.append('nowId', nowId);
        xhr.send(formData);
        getWinnerData(nowId);
    }

    function getWinnerData(nowId){
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'winnerData.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                name = xhr.responseText;
                alert('name Is '+name);
                let playerId = document.getElementById("playerId");
                let winnerId = document.getElementById("winnerId");
                let winnerName = document.getElementById("winnerName");
                winnerId.innerText = nowId;
                playerId.innerText = nowId;
                winnerName.innerText = name;
            }
            else
                alert(`Response From Server While Changing Id :`.xhr.response);
        };
        xhr.send(`nowId=` + nowId);//Changing Id
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
        xhr.open('GET', 'startFrom.php', false);
        xhr.onload = function () {
            if (xhr.status == 200) {
                startId = parseInt(xhr.responseText);
            }
        }
        xhr.send();
        return parseInt(startId, 10);  // Return the position as an integer (base 10);
    }

    function getStartValue(nowId) {
        const xhr = new XMLHttpRequest();
        xhr.open(`POST`, `getStart.php`, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onloads = function () {
            if (xhr.satus == 200)
                alert(`All Ok`);
            else
                alert(`Not Done`);
        }
        xhr.send("nowId=" + nowId);
    }

    let check;
    function diceValue(nowId) {
        var dice = Math.floor(Math.random() * 6) + 1;
        // alert(`dice id ${dice}`);
        updateDice(dice);
        showDice();
        let currentPos = fetch(nowId);
        let newPos = dice + currentPos;
        if (newPos > 100) {
            alert(`Limit`);
            return;
        }
        // if(check==0)
        //     if(checkStart(dice))
        //         return;

        // checkoverFlow();
        // Before Fixing The Position Have To Check That Is The Player Going Forward After 1
        posFix(nowId, newPos);
    }

    //check if player has entry number (1) to start the game,
    // function checkStart(dice){ 
    //     if(dice==1){
    //         check = 1;
    //         set start = 1 in db
    //         return true;
    //     }
    //     else
    //         alert(`Not Allowed`);

    // }

    function updateDice(dice) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "updateDice.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200)
                alert(`Updated Dice Successfully & Response Is ${xhr.responseText}`);
            else
                alert(`Have Not Updated Dice Successfully`);
        }

        xhr.onerror = function () {
            alert('An error occurred during the request.');
        };

        xhr.send("dice=" + encodeURIComponent(dice));
        // alert(`sending ${dice}`);
    }

    function showDice() {
        //Fetch Dice Value And Have To Show In Input Box Onload When Will Update;
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "getDice.php", true);
        xhr.onload = function () {
            if (xhr.status == 200) {
                diceIs = xhr.responseText;
                // alert(`Dice From DB: ${diceIs}`);
                document.getElementById('showValue').value = diceIs;
            }
            else
                alert(`Response Is ${diceIs}`)
        }
        xhr.send();
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

    function closeWinnerSection() {
        let winnerContainer = document.querySelector('.winner-container');
        winnerContainer.style.display = "none";
    }

</script>