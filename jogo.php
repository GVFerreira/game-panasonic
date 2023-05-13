<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>V-Razor Game</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body id="body-jogo" onresize="tamanhoTela()" onload="iniciarTimer()">
        <p id="tempo">0.000</p>
    </body>
    <script src="./js/game.js"></script>
    <script src="./js/timer.js"></script>
</html>