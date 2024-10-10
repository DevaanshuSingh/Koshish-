<script>

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

    window.onload = function () {
        
        choosedBcg();
        // Check local storage to see if welcome has been called
        if (!localStorage.getItem('hasWelcomed')) {
            welcome();
            localStorage.setItem('hasWelcomed', 'true'); // Store in local storage
        }

        // Other functions...
        let total = 4;
        for (let i = 1; i <= total; i++) {
            fetchPos(i);
        }
    };
    function welcome() {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "getSelectedMode.php", true);
        xhr.onload = function () {
            let mode = xhr.response.toUpperCase();

            showMode(mode);
        }
        xhr.send();
    }
    function showMode(mode) {
        const showMode = document.querySelector('.show-mode');
        const modeName = document.querySelector('.show-mode h2 span');
        showMode.style.transition = "opacity 3s ease";
        modeName.innerHTML = mode;

        switch (mode) {
            case 'EASY':
                modeName.style.color = "BLUE";
                break;
            case 'HARD':
                modeName.style.color = "RED";
                break;
            case 'SURPRISE':
                modeName.style.color = "GREEN";
                break;
        }
        showMode.style.opacity = 0;
        showMode.style.visibility = 'visible';
        showMode.style.display = "flex";

        setTimeout(function () {
            showMode.style.opacity = 1;
        }, 10);

        setTimeout(function () {
            showMode.style.opacity = 0;
        }, 10000);

        setTimeout(function () {
            showMode.style.visibility = 'hidden';
        }, 13000);
    }



    //{Bcg Section
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
    //Bcg Section} 

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

    function showDice() {
        const xhr = new XMLHttpRequest();
        xhr.open(`GET`, `showDice.php`, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                // alert(`${xhr.response}is dice`);
                document.getElementById('showValue').value = xhr.response;
            }
            else
                alert(`Did't Got dice`);
        }
        xhr.send();
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
            // alert(`Player ${i}Has Won The Game`);
            openDialogueBox(i);
            localStorage.clear();
        }
    }

    function getId(nowId) {
        const xhr = new XMLHttpRequest();
        // xhr.open('POST', '.fetch/changeId.php', true);
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

    function diceValue(nowId) {
        var dice = Math.floor(Math.random() * 6) + 1;
        document.getElementById('showValue').value = dice;
        let currentPos = fetchPos(nowId);
        let newPos = dice + currentPos;
        if (newPos) {
            // if (nowId == 1)
            //     alert(`Red : ${newPos} With ${dice}`);
            // if (nowId == 2)
            //     alert(`Green : ${newPos} With ${dice}`);
            // if (nowId == 3)
            //     alert(`Yellow : ${newPos} With ${dice}`);
            // if (nowId == 4)
            //     alert(`Blue : ${newPos} With ${dice}`);
        }
        if (newPos > 100)
            return;
        if (dice == 1)
            updateStart(nowId);

        updateDice(nowId, dice);
        let start_T_F = getCheckStart(nowId);
        if (start_T_F) {
            posFix(nowId, newPos);
        } else {
            alert(`Player ${nowId} Is Not Allowed Because Got: ${dice} Not 1`);
            return;
        }
    }

    function getCheckStart(nowId) {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `checkStart.php?nowId=${nowId}`, false); // Synchronous request, params in URL

        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.send();  // No need to pass anything in send() for GET

        if (xhr.status === 200) {
            // Process the response and convert it to a boolean
            const response = xhr.responseText.trim().toLowerCase();
            if (response === "true") {
                return true;
            } else if (response === "false") {
                return false;
            } else {
                alert('Unexpected response: ' + response);
                return false;
            }
        } else {
            alert('Error fetching start check');
            return false;
        }
    }

    function updateStart(nowId) {
        const xhr = new XMLHttpRequest();
        xhr.open(`POST`, `updateStart.php`, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                alert(`updateStart() Ok`);
                return xhr.response;
            }
            else
                alert(`updateStart() Error`);
        }
        xhr.send("nowId=" + nowId);
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

    function updateDice(nowId, dice) {
        const xhr = new XMLHttpRequest();
        xhr.open(`POST`, `updateDice.php`, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                alert(`Updated Dice`);
            }
            else
                alert(`Have Not Updated dice`);
        }
        xhr.send("nowId=" + nowId + "&dice=" + dice);
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

    function openDialogueBox(nowId) {
        // alert(`Sent ${nowId}`);
        let winnerContainer = document.querySelector('.winner-container');
        let winner = document.querySelector('.player-info');
        let img = document.getElementById('winnerImage');
        winnerContainer.style.display = "flex";
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "getWinnerImage.php", true);
        xhr.onload = function () {
            if (xhr.status == 200) {
                let imageUrl = xhr.responseText;
                img.src = imageUrl;
                // alert(`Got Winner's Image Successfully`);
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

    function getWinnerData(nowId) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'winnerData.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                name = xhr.responseText;
                // alert('name Is '+name);
                let idSpan = document.getElementById("idSpan");
                let winnerId = document.getElementById("winnerId");
                let winnerName = document.getElementById("winnerName");
                idSpan.innerHTML = nowId;
                winnerId.innerHTML = nowId;
                winnerName.innerHTML = name;
            }
            else
                alert(`Response From Server While Changing Id :`.xhr.response);
        };
        xhr.send(`nowId=` + nowId);//Changing Id
    }

    function closeWinnerSection() {
        let winnerContainer = document.querySelector('.winner-container');
        winnerContainer.style.display = "none";
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