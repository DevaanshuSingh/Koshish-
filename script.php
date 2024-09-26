<!-- In Js { -->
<!-- Trying To Add the feature not only select p1 or p2 instead of Select P${Id} this is versatile Which Is Needed -->
<script>
    //From Git_No_Showing

    function numberValue(nowId) {
        var dice = Math.floor(Math.random() * 6) + 1;
        document.getElementById('showValue').value = dice;//4
        changeThePosFunc(nowId, dice);
    }

    function getPos(){
        const xhr = new XMLHttpRequest();
        xhr.open(`POST`,``,true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Make sure to set the content type
        xhr.onload = function(){
            if(xhr.status==200){
                alert(`Position Got Succesgully From Database`);
                posFromDb = xhr.response;
            }
        }

        xhr.send();//Have To Complete This
    }

    let wholeGrid;
    let nxtPos;
    let pos = posFromDb;
    function changeThePosFunc(nowId, dice) {
        // alert('inside Change');
        wholeGrid = document.getElementById(`grid_${pos}`);
        let playerDivPrev = wholeGrid.querySelector(`.p${nowId}`);
        playerDivPrev.style.transition = 'background-color 1s ease';
        playerDivPrev.style.backgroundColor = 'rgba(0, 0, 0, 0)';

        nxtPos = pos + dice;
        wholeGrid = document.getElementById(`grid_${nxtPos}`);
        let playerDiv = wholeGrid.querySelector(`.p${nowId}`);
        if (playerDiv) {
            playerDiv.style.transition = 'background-color 1s ease';
            if(nowId==1)
            playerDiv.style.backgroundColor = 'red';
            if(nowId==2)
            playerDiv.style.backgroundColor = 'green';
            if(nowId==3)
            playerDiv.style.backgroundColor = 'yellow';
            if(nowId==4)
            playerDiv.style.backgroundColor = 'blue';
        }
        else
            console.log(`.p1 - ${nxtPos} not found in grid_${nxtPos}`);
        pos = nxtPos;
        if (nxtPos =< 100)
            alert(`Player ${nowId} Won`);
            posFix(nowId,nxtPos);
    }
    function posFix(nowId,nxtPos){
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

</script>