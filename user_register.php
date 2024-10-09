<p?php session_start(); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Infos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
        <link rel="stylesheet" href="./css/register.css">
    </head>

    <body>
        <div class="full-width-container">
            <header>
                <div id="game-name"><U><strong>SNAKE AND LADDER</strong></U></div>
            </header>
            <p id="p1">
                <strong><i>Welcome</i></strong>,<br>
                Player/ Player's Here you Can Play Snake And Ladder Made By Us. We
                Have Tried To Make This Game <strong>Enjoyable</strong>, <strong>User Friendly</strong> And <strong>Easy
                    To Play</strong>.
                You Can Play This Game In <strong>Different Modes:<br></strong>
            <div id="modes-section">
                <div id="modes">
                    <strong>
                        <div class="mode">
                            <h5>Easy Mode <span onclick="aboutEasy()"><sup>more</sup></span></h5>
                        </div>
                        <div class="mode">
                            <h5>Hard Mode <span onclick="aboutHard()"><sup>more</sup></span></h5>
                        </div>
                        <div class="mode">
                            <h5>Surprise Mode <span onclick="aboutSurprise()"><sup>more</sup></span></h5>
                        </div>
                    </strong>
                    <div class="easy know-about">Here You Can Play In Simple Way Without Any Extra Thinking. <span
                            class="close" onclick="closeAbout()"><i class="ri-close-line"></i></span></div>

                    <div class="d-flex-col know-about hard">In This Mode You Have
                        To Complete The Game Within Given Time. <span class="close" onclick="closeAbout()"><i
                                class="ri-close-line"></i></span></div>

                    <div class="d-flex-col know-about surprise">In This Surprise Mode You Will Be Surprised <span
                            class="close" onclick="closeAbout()"><i class="ri-close-line"></i></span></div>
                    <!-- <br> -->
                </div>
            </div>
            </p>
            <p id="p2">
                As This Is The First Ever Version So Here Are Some Bugs Also But,
                You Don't Have To Be Worried Because That Will Not Disturb You.
                By Your Support It Will Be Fixed Soon,
                <strong>So Let's Start:-</strong>
            </p>
            <div id="form-section">
                <div class="inner">
                    <div id="info"><i>Register Yourself As A Player:</i></div>
                    <form action="register.php" method="POST" enctype="multipart/form-data" class="form">
                        <div class="d-flex form-row container flex-wrap">
                            <div class="modes-form">
                                Want To Play In-<br>
                                <input type="radio" name="mode" value="easy" id="easy">
                                <label for="easy" id="easy-mode">EASY MODE</label><br>
                                <input type="radio" name="mode" value="hard" id="hard">
                                <label for="hard" id="hard-mode">HARD MODE</label><br>
                                <input type="radio" name="mode" value="surprise" id="surprise">
                                <label for="surprise" id="surprise-mode">SURPRISE MODE</label><br>
                            </div>
                            <div class="d-flex-column inside-form">
                                <div class="form-group column-8 name">
                                    <label class="name_label" for="player_name"><strong>Enter Name</strong></label>
                                    <input type="text" class="form-control" id="player_name" name="player_name"
                                        required>
                                </div>
                                <div class="form-group profile">
                                    <br><label class="picture_label" for="picture"><strong>Choose Profile
                                            Picture</strong></label>
                                    <input type="file" class="form-control" id="picture" name="image" accept="image/*"
                                        capture="environment" required>
                                </div>
                                <div class="form-group play-btn">
                                    <button type="submit" class="button btn-success"><span> PLAY</span></button>
                                </div>
                                <input type="hidden" name="client_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function aboutEasy() {
                let mode = document.querySelector('.easy');
                mode.style.display = "flex";
            }
            function aboutHard() {
                let mode = document.querySelector('.hard');
                mode.style.display = "flex";
            }
            function aboutSurprise() {
                let mode = document.querySelector('.surprise');
                mode.style.display = "flex";
            }
            function closeAbout() {
                let modes = document.querySelectorAll('.know-about');
                modes.forEach(function (mode) {
                    mode.style.display = "none";
                });
            }
            window.onload = function () {
                const xhr = new XMLHttpRequest();
                xhr.open("GET", "checkToShowMode.php", true);
                xhr.onload = function () {
                    if (forFirst <= 4) {
                        let forFirst = xhr.response;
                        // alert(`${forFirst} Players Have Registered`);
                        if (forFirst < 1) {
                            modes = document.querySelector('.modes-form');
                            // modes.style.display="flex";
                        }
                        else {
                            modes = document.querySelector('.modes-form');
                            container = document.querySelector('.container');
                            playBtn = document.querySelector('.play-btn');
                            // modes.style.backgroundColor= "red";
                            modes.style.display = "none";
                            container.style.justifyContent = "center";
                            container.style.alignItems = "center";
                            // playBtn.style.backgroundColor="red";
                            playBtn.style.height = "5vmin";
                            playBtn.style.width = "30%";
                        }
                    } else {
                        alert(`More Than 4`);
                        modes = document.querySelector('.modes-form');
                        container = document.querySelector('.container');
                        playBtn = document.querySelector('.play-btn');
                        // modes.style.display = "none";
                        container.style.justifyContent = "center";
                        container.style.alignItems = "center";
                        playBtn.style.height = "5vmin";
                        playBtn.style.width = "30%";
                    }
                }
                xhr.send();
            }
        </script>
    </body>

    </html>