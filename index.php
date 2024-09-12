<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snake And Ladder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Rectangle.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="backLogic.php">

    <script defer>
        // document.addEventListener('contextmenu', function (e) {
        //     e.preventDefault();
        // });
    </script>
</head>
<body>
    <div class="grid-container">

        <div class="grid-item" id="grid_100">100
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_99">99
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_98">98
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_97">97
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_96">96
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_95">95
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_94">94
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_93">93
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_92">92
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_91">91
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>

        <div class="grid-item" id="grid_81">81
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_82">82
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_83">83
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_84">84
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_85">85
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_86">86
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_87">87
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_88">88
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_89">89
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_90">90
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>

        <div class="grid-item" id="grid_80">80
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_79">79
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_78">78
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_77">77
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_76">76
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_75">75
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_74">74
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_73">73
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_72">72
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_71">71
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>

        <div class="grid-item" id="grid_61">61
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_62">62
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_63">63
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_64">64
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_65">65
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_66">66
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_67">67
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_68">68
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_69">69
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_70">70
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>

        <div class="grid-item" id="grid_60">60
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_59">59
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_58">58
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_57">57
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_56">56
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_55">55
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_54">54
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_53">53
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_52">52
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_51">51
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>

        <div class="grid-item" id="grid_41">41
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_42">42
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_43">43
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_44">44
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_45">45
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_46">46
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_47">47
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_48">48
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_49">49
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_50">50
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>

        <div class="grid-item" id="grid_40">40
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_39">39
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_38">38
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_37">37
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_36">36
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_35">35
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_34">34
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_33">33
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_32">32
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_31">31
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>

        <div class="grid-item" id="grid_21">21
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_22">22
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_23">23
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_24">24
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_25">25
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_26">26
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_27">27
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_28">28
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_29">29
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_30">30
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>

        <div class="grid-item" id="grid_20">20
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_19">19
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_18">18
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_17">17
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_16">16
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_15">15
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_14">14
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_13">13
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_12">12
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_11">11
                <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
                <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>


        <div class="grid-item" id="grid_1">1
            <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
            <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_2">2
            <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
            <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_3">3
            <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
            <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_4">4
            <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
            <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_5">5
            <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
            <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_6">6
            <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
            <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_7">7
            <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
            <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_8">8
            <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
            <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_9">9
            <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
            <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
        <div class="grid-item" id="grid_10">10
            <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"></div></div><div class="left-bottom p2"><div class="p2 player"></div></div></div>
            <div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"></div></div><div class="right-bottom p4"><div class="p4 player"></div></div></div>
        </div>
    </div>
    <div class="d-flex-row dice-section">
        <div class="numbers">
            <input id="showValue" type="text" readonly>
        </div>
        <button class="butt0n" onclick="numberValue()"><strong>CLICK</strong></button>
        <a href="user_register.php">Register</a>

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
                            $x = "<tr>";//Names From/Of Database's Columns
                            $x .= "<td>" . $record['id'] . ".</td>";
                            $x .= "<td>" . $record['name'] . "</td>";
                            $x .= "<td><img src='{$record['profile']}' alt='Profile Picture' style='width: 100px; height: auto;'></td>";
                            $x .= "<td>".$record['ip_address']."</td>";
                            echo '<br>' . $x; 
                        }
                        // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        //    echo "<option value=\"{$row['id']}\">{$row['qualification_name']}</option>";
                        // }
                    } catch (PDOException $e) {
                        echo 'Database error: ' . $e->getMessage();
                    }
                    ?>
                </tbody>
            </table>
            <?php
                // echo $_POST['client_ip'];
            ?>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>




<!-- Players-Section -->
<!-- <div class="d-flex-col left-col"><div class="left-top p1"><div class="p1 player"><?php echo "1"; ?></div></div><div class="left-bottom p2"><div class="p2 player"><?php echo "2"; ?></div></div></div>
<div class="d-flex-col right-col"><div class="right-top p3"><div class="p3 player"><?php echo "3"; ?></div></div><div class="right-bottom p4"><div class="p4 player"><?php echo "4"; ?></div></div></div> -->











<!-- Players-Section -->
<!-- <div class="d-flex-col left-col">
    <div class="left-top p1">
        <div class="p1 player"> -->
<?php
// echo "1";
// require 'connection_db.php';
// try {
//     $stmt = $pdo->query('select * from user_information where id=1');
//     $records = $stmt->fetch(PDO::FETCH_ASSOC);
//     echo "<img src='{$records['profile']}' alt='Profile Picture'>";
//     echo '<br>';
//     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//         echo "<option value=\"{$row['id']}\">{$row['qualification_name']}</option>";
//     }
// } catch (PDOException $e) {
//     echo 'Database error: ' . $e->getMessage();
// }
?>
<!-- </div>
    </div>
    <div class="left-bottom p2">
        <div class="p2 player"> -->
<?php
// echo "2";
// require 'connection_db.php';
// try {
//     $stmt = $pdo->query('select * from user_information where id=2');
//     $records = $stmt->fetch(PDO::FETCH_ASSOC);
//     echo "<img src='{$records['profile']}' alt='Profile Picture'>";
//     echo '<br>';
//     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//         echo "<option value=\"{$row['id']}\">{$row['qualification_name']}</option>";
//     }
// } catch (PDOException $e) {
//     echo 'Database error: ' . $e->getMessage();
// }
?>
<!-- </div>
    </div>
</div>
<div class="d-flex-col right-col">
    <div class="right-top p3">
        <div class="p3 player"> -->
<?php
// echo "3";
// require 'connection_db.php';
// try {
//     $stmt = $pdo->query('select * from user_information where id=3');
//     $records = $stmt->fetch(PDO::FETCH_ASSOC);
//     echo "<img src='{$records['profile']}' alt='Profile Picture'>";
//     echo '<br>';
//     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//         echo "<option value=\"{$row['id']}\">{$row['qualification_name']}</option>";
//     }
// } catch (PDOException $e) {
//     echo 'Database error: ' . $e->getMessage();
// }
?>
<!-- </div>
    </div>
    <div class="right-bottom p4">
        <div class="p4 player"> -->
<?php
// echo "4";
// require 'connection_db.php';
// try {
//     $stmt = $pdo->query('select * from user_information where id=4');
//     $records = $stmt->fetch(PDO::FETCH_ASSOC);
//     echo "<img src='{$records['profile']}' alt='Profile Picture'>";
//     echo '<br>';
//     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//         echo "<option value=\"{$row['id']}\">{$row['qualification_name']}</option>";
//     }
// } catch (PDOException $e) {
//     echo 'Database error: ' . $e->getMessage();
// }
?>
<!-- </div>
    </div>
</div> -->