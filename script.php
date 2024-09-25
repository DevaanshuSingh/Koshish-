<!-- In Js {-->
<!-- Trying To Add the feature not only select p1 or p2 instead of Select P${Id} this is versatile Which Is Needed -->
<!-- Retrying From Line 217 -->
<!-- <script>
    /*Random Number Genertor In The Range Of 1 To 6*/
    function numberValue(nowId) {
        alert(`Inside numberValue Function`);
        var dice = Math.floor(Math.random() * 6) + 1;
        document.getElementById('showValue').value = dice;//4
        changeThePosFunc(nowId, dice);
    }
    let wholeGrid;
    let nextpos;
    let currentPos = 1;
    let nowPlayer = nowId;

    function positionFix(nowId, valOfPos);//Fun-Initializing

    function changeThePosFunc(nowId, dice) {
        alert(`Got id ${nowId} Inside changeThePos Function`);

        wholeGrid = document.getElementById(`grid_${currentPos}`);//What Was Here grid_${currentPos} or else?
        let playerDivPrev = wholeGrid.querySelector(`.p${nowId}`);
        playerDivPrev.style.transition = 'background-color 1s ease';
        playerDivPrev.style.backgroundColor = 'rgba(0, 0, 0, 0)';

        nextpos = currentPos + dice;
        wholeGrid = document.getElementById(`grid_${nextpos}`);//For Next_Position
        let playerDiv = wholeGrid.querySelector(`.p${nowId}`);
        if (playerDiv) {
            playerDiv.style.transition = 'background-color 1s ease';
            if (nowId == 1)
                playerDiv.style.backgroundColor = 'red';
            else if(nowId == 2)
            playerDiv.style.backgroundColor = 'green';
            else if(nowId == 3)
            playerDiv.style.backgroundColor = 'yellow';
            else if(nowId == 4)
            playerDiv.style.backgroundColor = 'blue';
        }
        else
            alert(`.p${nowId} - ${nextpos} not found in grid_${nextpos}`);

        currentPos = nextpos;
        positionFix(nowId, currentPos);
        if (nextpos == 100)
            alert(`You Won`);
        else if (nextpos > 100)
            alert(`You Won Above`);
    }

    function positionFix(nowId, currentPos) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'updatePosition.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                let updatedPos = xhr.responseText;
                alert(`Position Updated Of ID : ${nowId} Into ${updatedPos}`);
            }
        }
        // Send both 'updatePos' and 'position' as parameters
        const params = `nowId=${nowId}&currentPos=${currentPos}`;
        xhr.send(params);
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
    }

</script> -->
<!-- Retrying From Linr 217-->
<!-- GPT -->
<script>
    // function manageFunctions() {
    //     alert(`Inscript.php Initial nowId: ${nowId}`);
    //     const xhr = new XMLHttpRequest();
    //     xhr.open('POST', 'changeId.php', true);
    //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    //     xhr.onload = function () {
    //         if (xhr.status === 200) {
    //             nowId = xhr.responseText; // Update nowId with server response
    //             alert(`New ID: ${nowId}`);

    //             // Now call numberValue with the updated nowId
    //             alert(`Before FUN_CALLING`);
    //             numberValue(nowId);  // Call numberValue now that nowId is updated
    //             alert(`After FUN_CALLING`); // This should run if numberValue() completes
    //         }
    //     };

    //     // Send the request to the server
    //     xhr.send('nowId=' + nowId);
    // }

    // function changeThePosFunc2(nowId, dice) {
    // function numberValue(nowId) {
    //     alert(`Inside numberValue Function`);

    //     // Generate random dice value
    //     var dice = Math.floor(Math.random() * 6) + 1;
    //     document.getElementById('showValue').value = dice; // Set dice value (ensure #showValue exists)

    //     // Call changeThePosFunc
    //     alert(`Calling changeThePosFunc with nowId: ${nowId} and dice: ${dice}`);
    //     changeThePosFunc(nowId, dice);

    //     // Check if this alert is reached
    //     alert(`After changeThePosFunc`);
    // }

    //     alert(`Got id ${nowId} and dice ${dice} Inside changeThePos Function`);

    //     // Check the current grid element
    //     wholeGrid = document.getElementById(`grid_${currentPos}`);
    //     if (!wholeGrid) {
    //         alert(`Grid element for current position (grid_${currentPos}) not found!`);
    //         return; // Exit if grid element is not found
    //     }

    //     let playerDivPrev = wholeGrid.querySelector(`.p${nowId}`);
    //     if (playerDivPrev) {
    //         playerDivPrev.style.transition = 'background-color 1s ease';
    //         playerDivPrev.style.backgroundColor = 'rgba(0, 0, 0, 0)';  // Clear previous color
    //     } else {
    //         alert(`Player div for id ${nowId} not found in grid_${currentPos}`);
    //     }
    //     nextpos = currentPos + dice;
    //     // Check the next grid element
    //     wholeGrid = document.getElementById(`grid_${nextpos}`);
    //     if (!wholeGrid) {
    //         alert(`Grid element for next position (grid_${nextpos}) not found!`);
    //         return; // Exit if grid element is not found
    //     }

    //     let playerDiv = wholeGrid.querySelector(`.p${nowId}`);
    //     if (playerDiv) {
    //         playerDiv.style.transition = 'background-color 1s ease';
    //         switch (nowId) {
    //             case 1:
    //                 playerDiv.style.backgroundColor = 'red';
    //                 break;
    //             case 2:
    //                 playerDiv.style.backgroundColor = 'green';
    //                 break;
    //             case 3:
    //                 playerDiv.style.backgroundColor = 'yellow';
    //                 break;
    //             case 4:
    //                 playerDiv.style.backgroundColor = 'blue';
    //                 break;
    //         }
    //     } else {
    //         alert(`.p${nowId} - ${nextpos} not found in grid_${nextpos}`);
    //     }

    //     currentPos = nextpos;
    //     positionFix(nowId, currentPos);

    //     if (nextpos == 100) {
    //         alert(`You Won`);
    //     } else if (nextpos > 100) {
    //         alert(`You Won Above`);
    //     }
    // }
    // let currentPos=1;
    // function changeThePosFunc(nowId, dice) {
    //         alert('inside Change');
    //         wholeGrid = document.getElementById(`grid_${ currentPos }`);
    //         let playerDivPrev = wholeGrid.querySelector(`.p${nowId}`);
    //         playerDivPrev.style.transition = 'background-color 1s ease';
    //         playerDivPrev.style.backgroundColor = 'rgba(0, 0, 0, 0)';

    //         nextpos = currentPos + dice;
    //         wholeGrid = document.getElementById(`grid_${ nextpos }`);
    //         let playerDiv = wholeGrid.querySelector(`.p${nowId}`);
    //         // if (playerDiv) {
    //         //     playerDiv.style.transition = 'background-color 1s ease';
    //         //     playerDiv.style.backgroundColor = 'red';
    //         // }
    //         if (playerDiv) {
    //             playerDiv.style.transition = 'background-color 1s ease';
    //             if (nowId == 1)
    //                 playerDiv.style.backgroundColor = 'red';
    //             else if(nowId == 2)
    //             playerDiv.style.backgroundColor = 'green';
    //             else if(nowId == 3)
    //             playerDiv.style.backgroundColor = 'yellow';
    //             else if(nowId == 4)
    //             playerDiv.style.backgroundColor = 'blue';
    //         }
    //         else
    //             alert(`.p1 - ${ nextpos } not found in grid_${ nextpos }`);
    //             currentPos = nextpos;
    //             if (nextpos == 100)
    //                 alert(`You Won`);
    //             else if (nextpos > 100)
    //                 alert(`You Won Above`);
    //     }


</script>

<script>
let pos = 1;
function numberValue(nowId) {
    let dice = Math.floor(Math.random() * 6) + 1; 
    document.getElementById('showValue').value = dice;
    alert(`dice: ${dice}`);
    changePos(nowId,dice);
}
let Pos = 1;
function changePos(nowId, dice){
    let prevGrid = document.getElementById(`grid_${pos}`);
    let prevPlayer = prevGrid.querySelector(`.p${nowId}`);

    if (prevPlayer) {
        prevPlayer.style.backgroundColor = 'rgba(0, 0, 0, 0)';
    }
    pos += dice;
    let newGrid = document.getElementById(`grid_${pos}`);
    let newPlayer = newGrid.querySelector(`.p${nowId}`);
    if (newPlayer) {
        if (nowId == 1)
            newPlayer.style.backgroundColor = 'red';
        else if (nowId == 2)
            newPlayer.style.backgroundColor = 'green';
        else if (nowId == 3)
            newPlayer.style.backgroundColor = 'yellow';
        else if (nowId == 4)
            newPlayer.style.backgroundColor = 'blue';
    }

    const xhr = new XMLHttpRequest();
    xhr.open(`POST`,`updatePosition.php`,true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Make sure to set the content type
    xhr.onload = function(){
        if (xhr.status === 200) {
                alert(`Position Updated Of ID : ${nowId} Into ${updatedPos}`);
            }
        else
            alert(`Have Not Updated The Position`);
    }

    xhr.send('nowId='+nowId+'&pos='+pos);
}
    // let pos = 1;
    // function changePos(nowId, dice) {
    //     // alert(`Insede numberValue with Id: ${nowId} And Dice: ${dice}`); //OK
    //     let wholeGrid = document.getElementById(`.grid_${pos}`);
    //     let playerDiv = wholeGrid.querySelector(`.p${nowId}`);
    //     let storePlayer = playerDiv;

    //     if (!playerDiv) {
    //     alert(`Player div not found for ID: ${nowId} in grid_${pos}`);
    //     return; // Exit if player div is not found
    // }

    //     wholeGrid.playerDiv.style.transition = `background-color 1s ease`;
    //     wholeGrid.playerDiv.style.backgroundColor = `red`;



    //     // wholeGrid = document.getElementById(`grid_${currentPos}`);//What Was Here grid_${currentPos} or else?
    //     // let playerDivPrev = wholeGrid.querySelector(`.p${nowId}`);
    //     // playerDivPrev.style.transition = 'background-color 1s ease';
    //     // playerDivPrev.style.backgroundColor = 'rgba(0, 0, 0, 0)';

    //     // nextpos = currentPos + dice;
    //     // wholeGrid = document.getElementById(`grid_${nextpos}`);//For Next_Position
    //     // let playerDiv = wholeGrid.querySelector(`.p${nowId}`);
    // }

// function changePos(nowId, dice) {
//     let wholeGridPrev = document.getElementById(`grid_${pos}`);
//     let playerDivPrev = wholeGridPrev.querySelector(`.p${nowId}`);

//     let nxtpos = pos + dice;
//     let wholeGridNext = document.getElementById(`grid_${nxtpos}`);
//     let playerDiv = wholeGridNext.querySelector(`.p${nowId}`);

//     if (playerDiv) {
//         playerDiv.style.transition = 'background-color 1s ease';
//         playerDiv.style.backgroundColor = 'red';
//     }

//     if (playerDivPrev) {
//         playerDivPrev.style.transition = 'background-color 1s ease';
//         playerDivPrev.style.backgroundColor = 'rgba(0, 0, 0, 0)';
//     }
//     pos = nxtpos;
//     if (nxtpos == 100 || nxtpos > 100) {
//         alert(`player ${nowId} Won`);
//     }
// }

// function changePos(nowId,dice) {
//         alert('inside Change');
//         wholeGrid = document.getElementById(`grid_${ pos }`);
//         let playerDivPrev = wholeGrid.querySelector(`.p1`);
//         playerDivPrev.style.transition = 'background-color 1s ease';
//         playerDivPrev.style.backgroundColor = 'rgba(0, 0, 0, 0)';

//         nxtpos = pos + dice;
//         wholeGrid = document.getElementById(`grid_${ nxtpos }`);
//         let playerDiv = wholeGrid.querySelector(`.p1`);
//         if (playerDiv) {
//             playerDiv.style.transition = 'background-color 1s ease';
//             playerDiv.style.backgroundColor = 'red';
//         }
//         else
//             console.log(`.p1 - ${ nxtpos } not found in grid_${ nxtpos }`);
//             pos = nxtpos;
//             if (nxtpos == 100)
//                 alert(`You Won`);
//             else if (nxtpos > 100)
//                 alert(`You Won Above`);
//     }

            // pos += dice;
            // let nextGrid = document.getElementById(`grid_${pos}`);
            // if (!nextGrid) {
            //     alert(`Grid not found for next position: grid_${pos}`);
            //     return; // Exit if next grid is not found
            // }
            // let nextPlayerDiv = nextGrid.querySelector(`.p${nowId}`);
    
            // if (nextPlayerDiv) {
            //     nextPlayerDiv.style.transition = `background-color 1s ease`;
            //     nextPlayerDiv.style.backgroundColor = `red`;
            //     if (nowId == 1)
            //         playerDiv.style.backgroundColor = 'red';
            //     else if (nowId == 2)
            //         playerDiv.style.backgroundColor = 'green';
            //     else if (nowId == 3)
            //         playerDiv.style.backgroundColor = 'yellow';
            //     else if (nowId == 4)
            //         playerDiv.style.backgroundColor = 'blue';
            // } else {
            //     alert(`Player div not found for ID: ${nowId} in grid_${pos}`);
            // }
    
            // playerDiv.style.transition = `background-color 1s ease`;
            // playerDiv.style.backgroundColor = `rgba(0, 0, 0, 0)`;

</script>