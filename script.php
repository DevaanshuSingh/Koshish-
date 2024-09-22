<!-- In Js {-->
<?php
// $dice = "<script>Math.floor(Math.random() * 6) + 1;</script>";
// echo "alert($dice)";                                         ,
?>
<script>
    /*Random Number Genertor In The Range Of 1 To 6*/
    function numberValue() {
        var x = Math.floor(Math.random() * 6) + 1;
        document.getElementById('showValue').value = x;//4
        changeThePosFunc(x);
    }
    //p=Player:(p1=Player1);
    let wholeGrid;
    let nextposp1;
    let currentPosp1 = 1;
    function changeThePosFunc(dice) {
        wholeGrid = document.getElementById(`grid_${ currentPosp1 }`);
        let playerDivPrev = wholeGrid.querySelector(`.p1`);
        playerDivPrev.style.transition = 'background-color 1s ease';
        playerDivPrev.style.backgroundColor = 'rgba(0, 0, 0, 0)';

        nextposp1 = currentPosp1 + dice;
        wholeGrid = document.getElementById(`grid_${ nextposp1 }`);
        let playerDiv = wholeGrid.querySelector(`.p1`);
        if (playerDiv) {
            playerDiv.style.transition = 'background-color 1s ease';
            playerDiv.style.backgroundColor = 'red';
        }
        else
            console.log(`.p1 - ${ nextposp1 } not found in grid_${ nextposp1 }`);
            currentPosp1 = nextposp1;
            if (nextposp1 == 100)
                alert(`You Won`);
            else if (nextposp1 > 100)
                alert(`You Won Above`);
    }
</script>
<!-- In Js }-->

<!-- Try To Do This Js Work In PHP -->
<!-- { -->
<!-- Trying -->
<!-- } -->

<!-- // duto ke add kore joto aache maane currentpos + dice= joto aaslo
//                                           nextPos= currentPos + Dice;
//                                          nextPos=  1+4;
//                                 grid_nextPos; //5
//                                 grid_1
//                                 grid_5
//joto aaslo seikhaankar bcg on kore daao;
//
//
//
// seikhaan kaar structure ere color kore dava jaabe on

// koshish
// document.addEventListener('DOMContentLoaded', function () {
//     var got = 7;
//     const gridItems = document.querySelectorAll(`.grid-item`); // Use querySelectorAll for multiple elements

//     gridItems.forEach(item => {
//         const playerHtml = `
//                 <div class="d-flex-col left-col">
//                     <div class="left-top"><div class="p1 player"></div></div>
//                     <div class="left-bottom"><div class="p2 player"></div></div>
//                 </div>
//                 <div class="d-flex-col right-col">
//                     <div class="right-top"><div class="p3 player"></div></div>
//                     <div class="right-bottom"><div class="p4 player"></div></div>
//                 </div>
//             `;

//         item.innerHTML += playerHtml;
//     });
// }); -->