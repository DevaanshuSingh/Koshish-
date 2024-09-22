<!-- Working -->
<?php
session_start(); // Always start the session at the top
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snake And Ladder</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                crossorigin="anonymous">
        <link rel="stylesheet" href="./css/Rectangle.css">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <!-- <link rel="stylesheet" href="./css/fix.css"> -->
        <script>
                // document.addEventListener('contextmenu', function (e) {
                //     e.preventDefault();
                // });
        </script>
</head>

<body>
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
                <div class="numbers">
                        <input id="showValue" type="text" readonly>
                </div>
                <?php
                require "script.php";

                // Initialize the session variable if it hasn't been set
                if (!isset($_SESSION['got'])) {
                        $_SESSION['got'] = 1; // Set a default value
                }

                $nowId = $_SESSION['got'];
                echo "ID Came: $nowId";
                ?>

                <button class="butt0n" onclick="callFunctions()"><strong>CLICK</strong></button>
                <script>
                        let send = 2;
                        let start = false;
                        alert(`Sending: ${send}`);
                        function callFunctions() {
                                if (start == true) {
                                        send++;
                                        const xhr = new XMLHttpRequest();
                                        xhr.open('POST', 'changeId.php', true);
                                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                                        xhr.onload = function () {
                                                let ans = this.response;
                                                // alert(`Response From Ajax Is: ${ans}`);

                                                // Refresh the page to see the updated session value Had Not Saw This
                                                // window.location.reload();//This Line Was Refreshing The Page, Was Not The AJAX Property That's Why Started Thinkin A New Idea That Make A New Column In DataBase now_term default wise that should be 1 and check from that fied that Who Is Next According To Id Measn Is Default Wise 1 Is First So After Clicking The Button Next Should Be 2 And After 3 And After 4 And After Again 1 These All Had To Do With Querries,
                                        };

                                        xhr.send(`send=${encodeURIComponent(send)}`);
                                }

                                else {
                                        start == true;
                                        const xhr = new XMLHttpRequest();
                                        xhr.open('POST', 'changeId.php', true);
                                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                        xhr.onload = function () {
                                                let ans = this.response;
                                                // alert(`Response From Ajax Is: ${ans}`);

                                                // Refresh the page to see the updated session value Had Not Saw This
                                                // window.location.reload();//This Line Was Refreshing The Page, Was Not The AJAX Property That's Why Started Thinkin A New Idea That Make A New Column In DataBase now_term default wise that should be 1 and check from that fied that Who Is Next According To Id Measn Is Default Wise 1 Is First So After Clicking The Button Next Should Be 2 And After 3 And After 4 And After Again 1 These All Had To Do With Querries,
                                        };

                                        xhr.send(`send=${encodeURIComponent(send)}`);
                                }
                                numberValue();
                        }

                        // Alert to show the initial session value
                        // alert('<?php echo "Reciving: " . $_SESSION["got"]; ?>');
                </script>

                <?php
                // Getting IP
                $nowId = $_SESSION["got"];
                require 'connection_db.php';
                try {
                        $stmt = $pdo->prepare("SELECT ip_address FROM user_information WHERE id = ?");
                        $stmt->execute([2]);
                        $nowIp = $stmt->fetchColumn();
                        echo "<h1>Now IP: \"$nowIp\"</h1>";
                } catch (PDOException $e) {
                        echo 'Database error: ' . $e->getMessage();
                }

                // Able/Disable Button
                if ($_SERVER['REMOTE_ADDR'] !== $nowIp) {
                        echo '<script type="text/javascript">
            document.querySelector(".butt0n").style.cursor = "not-allowed";
            document.querySelector(".butt0n").disabled = true;
        </script>';
                } else {
                        echo '<script type="text/javascript">
            document.querySelector(".butt0n").style.cursor = "pointer";
            document.querySelector(".butt0n").disabled = false;
        </script>';
                }
                ?>
        </div>
        <div id="show">
                <div id="show-inner">
                        <table class="table table-dark table-striped">
                                <thead>
                                        <tr>
                                                <th col="3">Player Id</th>
                                                <th col="3">Player Name</th>
                                                <th col="3">Player Pehchaan</th>
                                                <th col="3">Ip Address</th>
                                                <th col="3">Remove</th>
                                        </tr>
                                </thead>
                                <tbody class="bg-success text-white">
                                        <?php
                                        // Database connection
                                        require 'connection_db.php';
                                        try {
                                                $stmt = $pdo->query('select * from user_information');
                                                $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                foreach ($records as $record) {
                                                        $x = "<tr>";
                                                        $x .= "<td>" . $record['id'] . ".</td>";
                                                        $x .= "<td>" . $record['name'] . "</td>";
                                                        $x .= "<td><img src='{$record['profile']}' alt='Profile Picture' style='width: 100px; height: auto;'></td>";
                                                        $x .= "<td>" . $record['ip_address'] . "</td>";
                                                        $x .= "<td><form><button style='background-color: red;' value='" . $record['id'] . "' name='del'>DELETE</button></form></td>";
                                                        echo '</tr><br>' . $x;
                                                }
                                        } catch (PDOException $e) {
                                                echo 'Database error: ' . $e->getMessage();
                                        }
                                        // $deleteFromId=$_GET['del'];
                                        // $stmt = $pdo->prepare('TRUNCATE FROM user_information WHERE condition id=?;');
                                        // $stmt->execute([$deleteFromId]);
                                        if (isset($_GET['del'])) {
                                                $deleteFromId = $_GET['del'];

                                                // Prepare DELETE query to remove the specific record
                                                $stmt = $pdo->prepare('DELETE FROM user_information WHERE id = ?');
                                                $stmt->execute([$deleteFromId]);

                                                // Redirect to prevent form resubmission on refresh
                                                // header("Location: index.php"); // Replace 'your_page.php' with your actual page
                                        }
                                        ?>
                                <tbody>
                        </table>
                        <?php
                        echo '<i>Ip_Address OF This Device Is <strong> ' . $_SERVER['REMOTE_ADDR'] . '</strong></i><br>';
                        ?>
                </div>
        </div>
        <!-- <script src="script.php"></script> -->
</body>

</html>
<!-- Working -->

<!-- 


<script>
                        let btnForAjax = document.getElementById('butt0n');
                        btnForAjax.addEventListener('click', function () {
                                const xhr = new XMLHttpRequest();

                                xhr.open(`POST`, `changeId.php`, true);

                                xhr.onprogress = function () {
                                        console.log(`जारी है`);
                                }
                                xhr.onload = function () {
                                        if (xhr.status === 200) {
                                                let ans = this.response; // Get the response from changeId.php
                                                alert('Received ID:', ans); // Use the value as needed
                                                alert(ans); // Show the value to the user
                                        } else {
                                                console.error('Error fetching data:', xhr.statusText);
                                        }
                                };
                                xhr.send(`?$nowId=1`);
                        });
                </script>
                <?php
                // if (isset($_POST['Id'])) {
                //         $nowId = intval($_POST['Id']); // Store the received value in a PHP variable
                //         // Do something with $nowId
                // }
                // $nowId++;