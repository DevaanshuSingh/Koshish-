<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="show">
        <div id="show-inner">
            <table class="t">
                <thead>        
                    <tr>
                        <th colspan="3">Player Id</th>
                        <th colspan="3">Player Name</th>
                        <th colspan="3">Player Pehchaan</th>
                    </tr>
                </thead>
                <tbody class="bg-success text-white"> 
                </tbody>
            </table>
            <button onclick="displayMessage()">GRK</button>
        </div>
    </div>

    <?php  
    function check(){
        return "GRADHEKRISHN";
    }
    ?>

    <script>
        function displayMessage() {
            alert("<?php echo check(); ?>");
        }
    </script>
</body>
</html>
