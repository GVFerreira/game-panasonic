<?php
    session_start();
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>V-Razor Game</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    </head>
    <body id="body-gameover">
        <img id="img-panasonic" src="img/logo-panasonic.svg">
        <div id="container-gameover">
            <div id="restart">
                <h1>Fim de jogo...</h1>
                <p>Seu tempo: <span id="minha-pontuacao" class="spans"></span> segundos</p>
                <p>Quantidade de acertos: <span id="acertos" class="spans"></span> cliques</p>
                <button id="btn-restart" onclick="window.location.href = 'index.php'">reiniciar</button>
            </div>
        </div>
    </body>
    <script>
        const pontuacao = window.localStorage.getItem("minha-pontuacao")
        const spanPontuacao = document.getElementById('minha-pontuacao')
        spanPontuacao.innerText = pontuacao

        const acertos = window.localStorage.getItem("acertos")
        const spanAcertos = document.getElementById('acertos')
        spanPontuacao.innerText = acertos

    </script>
</html>
