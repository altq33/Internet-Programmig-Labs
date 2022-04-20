<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/Styles/styles.css">
    <title>MyPageHome</title>
</head>
<body>
    <?php

    ?>
    <div class="wrap">
        <header id="header">
            <div class="fixed-container">
                <div class="head-container">
                    <a href="../src/index.php"><div class="logo"></div></a>
                    <div class="burger-menu"></div>  
                    <div class="links">
                      <nav id="nav">
                        <div class="buttons-container">
                            <a class="nav-links" href="../src/index.php">Home</a>
                            <a class="nav-links" href="./src/Pages/About.php">About me</a>
                            <a class="nav-links" href="./src/Pages/Labs.php">Labs</a>
                            <a class="nav-links" href="./Pages/Gallery.php">Gallery</a>
                        </div>                     
                      </nav>
                      <div class="media-links">
                        <a class="social" href="https://vk.com/altq33" target="blank"></a>
                        <a class="social" href="https://www.spotify.com/ru-ru/" target="blank"></a>
                        <a class="social" href="https://twitter.com/?lang=ru" target="blank"></a>
                        <a class="social" href="https://www.facebook.com" target="blank"></a>
                      </div>
                    </div>
                </div>
            </div>         
        </header>
        <main id="main">
            <div class="fixed-container">
                <div class="info-container">
                    <div class="left-part">
                        <img src="../img/portret.png" alt="Portret">
                        <p class="quote">
                            Success is the ability to go from one failure to another with no loss of enthusiasm.
                            Winston Churchill
                        </p>
                    </div>
                    <div class="right-part">
                        <h1 class="name">Dmitry Chankov</h1>
                        <p class="description">
                            I am a novice programmer, studying at the Ulyanovsk State Technical University in the direction of foreign mathematics and computer engineering. I am positive and strive to develop, my dream is to become a top developer.
                        </p>
                        <a href="../src/Pages/Social.php" class="more">Find out more about me</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="../src/scripts/main.js"></script>
</body>
</html>