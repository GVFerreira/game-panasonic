<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>V-Razor Game</title>
        <link rel="stylesheet" href="css/style.css">
        <style>
            #countdown {
                font-size: 12rem;
                text-shadow: 0px 0px 10px #000;
            }
        </style>
    </head>
    <body id="body-jogo" onresize="tamanhoTela()">
        <p id="tempo">0.000</p>
        <div id="countdown"></div>
    </body>
    <script src="./js/game.js"></script>
    <script src="./js/timer.js"></script>
</html>
