<?php
session_start();

?>




<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lobster+Two" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">



<!--    <embed type="audio/midi" src="musique.mp3" volume="60" loop="true" autostart="true" />-->
    <title>Secret Santa</title>
</head>
<body>
<canvas></canvas>
<object class="bg" type="audio/mpeg" data="musique.mp3">
    <param name="src" value="musique.mp3" />
    <param name="filename" value="musique.mp3" />
    <param name="type" value="audio/mpeg" />
    Si le lecteur ne s'affiche pas, un <a href="musique.mp3" type="audio/mpeg">lien direct vers la bande son (format MP 3)</a>
</object>


<div class="window">
    <div class="santa">
        <div class="head">
            <div class="face">
                <div class="redhat">
                    <div class="whitepart"></div>
                    <div class="redpart"></div>
                    <div class="hatball"></div>
                </div>
                <div class="eyes"></div>
                <div class="beard">
                    <div class="nouse"></div>
                    <div class="mouth"></div>
                </div>
            </div>
            <div class="ears"></div>
        </div>
        <div class="body"></div>
    </div>
    </div>

    <span class='button'></span>
<div class='popup'>
  <div>Secret Santa is about to exchange gift randomly with friends !</div>
  <svg height="50" width="100" opacity="0.5">
    <path d="M0 50 L40 0 L65 0 Z" />
    Sorry, your browser does not support inline SVG.
  </svg>
</div>



            <section id="content2-8" class="content2-8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="single-content text-center">
                            <img src="elf3.png" alt="LogoMetropole">
                                <div class="item-text">
                                    <p data-selector="p">Enter name and email</p>
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="single-content text-center">
                            <img src="rein2.png" alt="LogoMetropole">
                                <div class="item-text">
                                    <p data-selector="p">check your mailbox</p>
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="single-content text-center">
                            <img src="santa2.png" alt="LogoMetropole">
                                <div class="item-text">
                                    <p data-selector="p">Share your gift</p>
                                </div>
                            </div>    
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </section>


        


<div class="message">
    <h1>Merry Christmas!</h1>
    <h2 class="copyright"><form class="formm" action="action.php" method="post">
            <input type="text" name="person" placeholder="name">
            <input type="text" name="email" placeholder="email"><br>
            <input type="text" name="person" placeholder="name">
            <input type="text" name="email" placeholder="email"><br>
            <div id="addInput"></div>

            <input class="onInput"type="button" value="+" onClick="add();" /><br>

            <div class="md">
            <input type="text" name="budget" placeholder="budget"><br>
            <input type="date" name="date" placeholder="date"><br>
            <input type="text" name="event" placeholder="event"><br>
            </div>


            <input type="submit" name="submit" placeholder="send">

        </form>
    </h2>
</div>



<div class="snowman">
    <div class="hat"></div>
    <div class="hati"></div>
    <div class="hatii"></div>
    <div class="eye1"></div>
    <div class="eye2"></div>
    <div class="nose"></div>
    <div class="mouth"></div>
    <div class="scarf">
        <div class="scarfi">
            <div class="scarfii">
            </div>
        </div>
    </div>
    <div class="scarf2"></div>
    <div class="button"></div>
    <div class="button2"></div>
</div>

<div class="present" ontouchstart="ontouchstart">
    <div class="santafooter">
        <div class="santa__hat"></div>
        <div class="santa__eyes"></div>
        <div class="santa__beard">
            <div class="santa__beard--cover"></div>
        </div>
        <div class="santa__smile"></div>
    </div>
    <div class="present__box">
        <div class="present__ribbon--vertical"></div>
        <div class="present__ribbon--horizontal"></div>
    </div>
    <div class="present__top">
        <div class="present__ribbon--vertical"></div>
        <div class="present__bow"></div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
