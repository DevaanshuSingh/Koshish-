<script>

    function getTotal() {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'total.php', false);

        if (xhr.status == 200) {
            // alert(`Response type: ${typeof xhr.responseText}`);
            return parseInt(xhr.responseText); // Return the total as an integer
        } else {
            alert(`else part`);
            return 0; // Return 0 if there's an error
        }
        xhr.send(); // Send the request
    }

    let modeIs;
    function welcome() {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "getSelectedMode.php", true);
        xhr.onload = function () {
            let mode = xhr.response.toUpperCase();
            showMode(mode);
        }
        xhr.send();
    }

    function timer() {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "getSelectedMode.php", true);
        xhr.onload = function () {
            let mode = xhr.response;
            if (mode == "hard") {
                let timer = document.querySelector(".timer-section");
                timer.style.display = "flex";
                let numbers = document.querySelector(".numbers");
                let button = document.querySelector(".butt0n");
                let diceSection = document.querySelector(".dice-section");
                diceSection.style.top = "0";
                diceSection.style.height = "100vh";
                numbers.style.bottom = "-5vh";
                setTimeout(function () {
                    startTimer();
                }, 1);

            } else {
                // alert(`xhr.responseText of mode is: ${mode}`);
            }
        }
        xhr.send();
    }

    function timeUp() {
        // alert("timeUp");
        let timer = document.querySelector(".timer");
        let timerSection = document.querySelector(".timer-section");
        let footer = document.querySelector(".footerText");
        timer.style.transition = "3s ease";
        footer.style.transition = "3s ease";
        timerSection.style.border = "none";
        timer.style.backgroundColor = "rgb(255,255,255,.6)";
        timer.style.height = "100vh";
        timer.innerHTML = "";//to unShow time
        timer.style.width = "100%";
        timer.style.borderRadius = "0";
        timer.style.position = "absolute";
        timer.style.left = "0vw";
        timer.style.display = "flex";
        timer.style.justifyContent = "center";
        timer.style.alignItems = "center";
        // footer.innerHTML = "<strong>TIME UP!!<br>Please Try Again</strong>";
        footer.innerHTML = "<strong>TIME UP!!<br>Please Try Again <a onclick='truncateTable()' href='user_register.php'>Here</a> </strong>";
        footer.style.fontFamily = " Georgia, 'Times New Roman', Times, serif";
        footer.style.height = "100vh";
        footer.style.color = "black";
        footer.style.borderRadius = "0";
        footer.style.position = "absolute";
        footer.style.top = "0";
        footer.display = "flex";
        footer.style.justifyContent = "center";
        footer.style.alignItems = "center";
        footer.style.fontSize = "3rem";
    }

    function startTimer() {
        let min = 0;
        let sec = 1;
        let timerInterval;
        timerInterval = setInterval(function () {
            if (min == 7) {
                clearInterval(timerInterval);
                // alert(`Time Up`);
                // secElem.innerHTML = 0;
                return timeUp();
            }
            if (sec == 5) {
                sec = 0;
                min++;
            }
            console.log(min+" and "+ sec)

            //Updating Time In DB
            // updateTime(min, sec);

            //Fetching Time From DB To Show
            let minElem = document.querySelector(".min");
            let secElem = document.querySelector(".sec");
            // let getMin = getMin();
            // let getSec = getSec();
            minElem.innerHTML = min;
            secElem.innerHTML = sec++;
            // minElem.innerHTML = getMin;
            // secElem.innerHTML = getSec++;
        }, 1000);
    }

    window.onload = function () {
        // wait until all players have come on the screen
        let playerCount = getPlayerscount();
        // alert(`onload pc = ${playerCount}`);
        if (playerCount == 4)
            timer();

        id = startFrom();
        // alert(`now_turn: ${id}`);
        showDice(id);
        choosedBcg();
        // Check local storage to see if welcome has been called
        if (!localStorage.getItem('hasWelcomed')) {
            welcome();
            localStorage.setItem('hasWelcomed', 'true'); // Store in local storage
        }
        let total = 4;
        for (let i = 1; i <= total; i++) {
            fetchPos(i);
        }
        // alert(`1)\tin hard mode on each click timer starts from 0 cause it is in CLINT SITE It Should Be SERVER SIDE; that update time in database and fetch from there each second,\n2)\t!!TIME UP PLEASE TRY AGAIN HERE onclick here player goes to register page with truncating table but when first have clicked then tables has truncated and in db 1st registers then second come in register page by clicking HERE link which again truncate the table Cause the 1st have registerd again that data will also truncate, so there have to set a condition according that only form first click table will truncate and show the register page but for another threes only register page will be shown,`);
    };

    function getMin() {
        alert("Inside getMin()");

        const xhr = XMLHttpRequest();
        xhr.open("GET", "getMin.php", false);
        xhr.onload = function () {
            let min = xhr.response;
            if (xhr.status == 200) {
                // alert(`Got Min ${xhr.response}`);
                console.log (`Got Min ${xhr.response}`);

            }
            else
                // alert(`Did't Got Min: ${xhr.response}`);
                console.log (`Did't Got Min: ${xhr.response}`);

        }
        xhr.send();
        return min;
    }

    function getSec() {
        alert("Inside getSec()");

        const xhr = XMLHttpRequest();
        xhr.open("GET", "getSec.php", false);
        xhr.onload = function () {
            let sec = xhr.response;
            if (xhr.status == 200) {
                // alert(`Got Sec ${xhr.response}`);
                console.log (`Got Sec ${xhr.response}`);

            }
            else
                // alert(`Did't Got Sec: ${xhr.response}`);
                console.log (`Did't Got Sec: ${xhr.response}`);

        }
        xhr.send();
        return sec;
    }

    function updateTime(min, sec) {
        // alert("Inside UpdateTime()");
        const xhr = XMLHttpRequest();
        xhr.open("POST", "updateTime.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                // alert("Updated Time");
                console.log ("Updated Time");

            }
            else
                // alert(`Not Updated Time: ${xhr.response}`);
                console.log (`Not Updated Time: ${xhr.response}`);

        }
        xhr.send("min=" + min + "&sec=" + sec);
    }

    function getPlayerscount() {
        let playerCount;
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "checkToShowModeSection.php", false);
        xhr.onload = function () {
            playerCount = parseInt(xhr.responseText);
            // alert(`Total Player: ${xhr.responseText}`);
        }
        xhr.send();
        return playerCount;
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

    function getId(nowId) {
        // alert("getId()");
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'changeId.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                nowId = xhr.responseText;
                parseInt(nowId);
                // alert("calling diceVal()");
                diceValue(nowId);
                updateTurn(xhr.responseText);
            }
            else
                alert(`Response From Server While Changing Id :`.xhr.response);
        };
        xhr.send(`nowId=` + nowId);//Changing Id
    }

    function diceValue(nowId) {
        // alert("diceVal()");
        var dice = Math.floor(Math.random() * 6) + 1;
        document.getElementById('showValue').value = dice;
        let currentPos = fetchPos(nowId);
        let newPos = dice + currentPos;
        updateDice(nowId, dice);
        if (nowId == 1)
            alert(`red1 : ${dice} = ${newPos}`);
        else if (nowId == 2)
            alert(`green2 : ${dice} = ${newPos}`);
        else if (nowId == 3)
            alert(`yellow3 : ${dice} = ${newPos}`);
        else if (nowId == 4)
            alert(`blue4 : ${dice} = ${newPos}`);
        if (newPos > 100) {
            alert(`Completed The journey`);
            return;
        }
        getCheckStart(nowId);
        posFix(nowId, newPos);
        return;
    }

    function updateDice(nowId, dice) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'updateDice.php', false);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                // alert(`While updating dice: ${xhr.response}`);
            } else {
                alert('Have not updated dice');
            }
        };
        xhr.send("nowId=" + nowId + "&dice=" + dice);
    }

    function showDice(nowId) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'showDice.php', false);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        // alert(`showDice's nowId Is ${nowId}`);
        xhr.onload = function () {
            // alert(`${xhr.response} is dice of ${nowId}`);
            if (xhr.status == 200) {
                document.getElementById('showValue').value = xhr.response;
            }
            else
                alert(`Did't Got dice`);
        }
        xhr.send("nowId=" + nowId);
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

    function getCheckStart(nowId) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'getCheckStart.php', false); // Synchronous request
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.send("nowId=" + nowId);  // Send request with nowId

        if (xhr.status === 200) {
            return parseInt(xhr.responseText);  // Return the server response as an integer
        } else {
            alert('Error fetching start check');
            return null; // Return null or handle error
        }
    }

    function updateStart(nowId) {
        const xhr = new XMLHttpRequest();
        xhr.open(`POST`, `updateStart.php`, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                alert(`updateStart response: ${xhr.responseText}`);
            }
            else
                alert(`updateStart() Error`);
        }
        xhr.send("nowId=" + nowId);
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
        // alert(`posFix(${nowId})`);
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
        let button = document.querySelector(".butt0n");
        button.style.cursor = "not-allowed";
        button.disabled = true;
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
        localStorage.clear();
    }

</script>