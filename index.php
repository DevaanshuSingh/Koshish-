<!-- Working -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KOSHSIH</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                crossorigin="anonymous">
        <link rel="stylesheet" href="./css/Rectangle.css">
</head>

<body>
        <?php
        require "script.php";
        ?>
        <div class="show-mode">
                <h2><span></span> Mode Enabled</h2>
        </div>
        <div class="winner-container">
                <span onclick="closeWinnerSection()">
                        <h4>x</h4>
                </span>
                <div class="winner">
                        <div class="player-info">
                                <img src="" alt="Winner's Image" id="winnerImage">
                        </div>
                        <footer>
                                <div class="won">PLAYER <span id="idSpan"></span> WON THE GAME</div>
                                <table class="table table-dark align-middle table-striped table-bordered">
                                        <thead>

                                                <td> ID</td>
                                                <td> NAME</td>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                        <td id="winnerId"></td>
                                                        <td id="winnerName"></td>
                                                </tr>
                                        </tbody>
                                </table>
                        </footer>
                </div>
        </div>
        <div class="grid-container">
                <div class="grid-item" id="grid_100">100
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_99">99
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_98">98
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_97">97
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_96">96
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_95">95
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_94">94
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_93">93
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_92">92
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_91">91
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>

                <div class="grid-item" id="grid_81">81
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_82">82
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_83">83
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_84">84
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_85">85
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_86">86
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_87">87
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_88">88
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_89">89
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_90">90
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>

                <div class="grid-item" id="grid_80">80
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_79">79
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_78">78
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_77">77
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_76">76
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_75">75
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_74">74
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_73">73
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_72">72
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_71">71
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>

                <div class="grid-item" id="grid_61">61
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_62">62
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_63">63
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_64">64
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_65">65
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_66">66
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_67">67
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_68">68
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_69">69
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_70">70
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>

                <div class="grid-item" id="grid_60">60
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_59">59
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_58">58
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_57">57
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_56">56
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_55">55
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_54">54
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_53">53
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_52">52
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_51">51
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>

                <div class="grid-item" id="grid_41">41
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_42">42
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_43">43
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_44">44
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_45">45
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_46">46
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_47">47
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_48">48
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_49">49
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_50">50
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>

                <div class="grid-item" id="grid_40">40
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_39">39
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_38">38
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_37">37
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_36">36
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_35">35
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_34">34
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_33">33
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_32">32
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_31">31
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>

                <div class="grid-item" id="grid_21">21
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_22">22
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_23">23
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_24">24
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_25">25
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_26">26
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_27">27
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_28">28
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_29">29
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_30">30
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>

                <div class="grid-item" id="grid_20">20
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_19">19
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_18">18
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_17">17
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_16">16
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_15">15
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_14">14
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_13">13
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_12">12
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_11">11
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>


                <div class="grid-item" id="grid_1">1
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_2">2
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_3">3
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_4">4
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_5">5
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_6">6
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_7">7
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_8">8
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_9">9
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
                <div class="grid-item" id="grid_10">10
                        <div class="d-flex-col left-col">
                                <div class="left-top p1">
                                        <div class="p1 player"></div>
                                </div>
                                <div class="left-bottom p2">
                                        <div class="p2 player"></div>
                                </div>
                        </div>
                        <div class="d-flex-col right-col">
                                <div class="right-top p3">
                                        <div class="p3 player"></div>
                                </div>
                                <div class="right-bottom p4">
                                        <div class="p4 player"></div>
                                </div>
                        </div>
                </div>
        </div>
        <div class="d-flex-row dice-section">
                <div class="timer-section">
                        <div class="timer">
                                <span class="min">0</span> : <span class="sec">0</span>
                        </div>
                        <footer class="footerText">Have To Complete Game Within Limit.</footer>
                </div>
                
                <div class="numbers">
                        <input id="showValue" type="text" readonly>
                </div>
                <?php require 'script.php'; ?>
                <button class="butt0n" onclick="manageFunctions()"><strong>DI<span id="ce">CE</span></strong></button>

                <?php
                require 'connection_db.php';
                if (!isset($_SESSION["changed"])) {
                        $_SESSION["changed"] = 1; // Initializing with a default value
                }
                $nowId = $_SESSION["changed"];
                try {
                        $stmt = $pdo->prepare("SELECT ip_address FROM user_information WHERE id = ?");
                        $stmt->execute([$nowId]);
                        $nowIp = $stmt->fetchColumn(0);
                        if ($nowIp) {
                                echo "<h1>IP ($nowId): \"$nowIp\"</h1>";
                        } else {
                                echo "<h1>No IP ID ($nowId)</h1>";
                        }
                } catch (PDOException $e) {
                        echo 'Database error: ' . $e->getMessage();
                }
                ?>
                <script>
                        // let nowId = startFrom();
                        function manageFunctions() {
                                let nowId = startFrom();
                                getId(nowId);
                                location.reload();
                        }
                </script>
                <?php
                $nowId = $_SESSION["changed"];// Getting IP
                // Able/Disable Button                               
                if ($_SERVER['REMOTE_ADDR'] !== $nowIp) {
                        echo '<script type="text/javascript">
            document.querySelector(".butt0n").style.cursor = "not-allowed";
            document.querySelector(".butt0n").disabled = true;
            document.querySelector(".butt0n").color = red;
        </script>';
                } else {
                        echo '<script type="text/javascript">
            document.querySelector(".butt0n").style.cursor = "pointer";
            document.querySelector(".butt0n").disabled = false;
        </script>';
                }
                require "script.php";
                ?>
                <div class="cont">
                        <label for="colorInput">
                                <span id="change"><strong>CHOOSE COLOR</strong></span>
                        </label>
                        <input type="color" id="colorInput"><br>
                </div>
        </div>
        <div id="show">
                <div id="show-inner">
                        <table class="table table-dark table-striped">
                                <thead>
                                        <tr>
                                                <th>Player Id</th>
                                                <th>Player Name</th>
                                                <th>Player Pehchaan</th>
                                                <th>Ip Address</th>
                                                <th>BCG</th>
                                                <th>Remove</th>
                                        </tr>
                                </thead>
                                <tbody class="bg-success text-white">
                                        <?php
                                        // Database connection
                                        require 'connection_db.php';
                                        try {
                                                $stmt = $pdo->query('SELECT * FROM user_information');
                                                $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                                foreach ($records as $record) {
                                                        $x = "<tr>";
                                                        $x .= "<div class='adjust' ><td>" . $record['id'] . ".</td></div>";
                                                        $x .= "<div class='adjust' ><td>" . $record['name'] . "</td></div>";
                                                        $x .= "<div class='adjust-image' ><td><img src='" . $record['profile'] . "' alt='Profile Picture' style='width: 100px; height: auto;'></td></div>";
                                                        $x .= "<div class='adjust' ><td>" . $record['ip_address'] . "</td></div>";
                                                        $x .= "<div class='adjust' ><td>" . $record['background_color'] . "</td></div>";
                                                        $x .= "<div class='adjust' ><td><button type='submit' name='del' value='" . $record['id'] . "' onclick='truncateTable()' style='background-color: red; color: white'>TRUNCATE</button></td></div>";
                                                        $x .= "</tr>";
                                                        echo $x;
                                                }
                                        } catch (PDOException $e) {
                                                echo 'Database error: ' . $e->getMessage();
                                        }

                                        // Deletion logic
                                        if (isset($_GET['del'])) {
                                                $deleteFromId = $_GET['del'];
                                                $stmt = $pdo->prepare('DELETE FROM user_information WHERE id = ?');
                                                $stmt->execute([$deleteFromId]);
                                                // Redirect to prevent form resubmission on refresh
                                                header("Location: index.php");
                                        }
                                        ?>
                                </tbody>
                        </table>
                </div>

                <?php
                // echo '<i>Ip_Address OF This Device Is <strong> ' . $_SERVER['REMOTE_ADDR'] . '</strong></i><br>';
                ?>

        </div>
        <script>
                // bcg_Section
                let colorIs = document.getElementById("colorInput");
                let change = document.getElementById("change");

                colorIs.addEventListener("input", function () {
                        const bcg_Color = colorIs.value;
                        updateBcg(bcg_Color);
                        change.textContent = bcg_Color.toUpperCase();
                        document.body.style.backgroundColor = `${bcg_Color}`;
                });
        </script>
</body>

</html>