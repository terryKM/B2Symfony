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

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lobster+Two" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

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





<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
