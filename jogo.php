<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>V-Razor Game</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <style>
            #countdown {
                font-size: 12rem;
                text-shadow: 0px 0px 10px #000;
            }
        </style>
    </head>
    <body id="body-jogo" onresize="tamanhoTela()">
        <audio id="backgroundMusic" src="./img/music.mpeg"></audio>

        <p id="tempo">0.000</p>
        <div id="countdown"></div>
    </body>
    <script src="./js/game.js"></script>
    <script>
        $(document).ready(function () {
            //Desabilita a função de cortar, copiar e colar
            $('body').bind('cut copy paste', function (e) {
                e.preventDefault()
            })

            //Desabilita o clique direito do mouse
            $("body").on("contextmenu",function(e){
                return false
            })
        }); 
    </script>
</html>
