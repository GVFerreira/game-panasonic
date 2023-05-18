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
</head>
<body id="body-regras">
    <img id="img-panasonic" src="img/logo-panasonic.svg">
    <div id="container-regras">
        <div id="box-lista">
            <h1>Regras</h1>
            <div class="regras">
                <div>
                    <h2>Tempo de jogo</h2>
                    <p>60 segundos</p>
                </div>
                <div>
                    <h2>V-Razor</h2>
                    <p>100 cliques</p>
                </div>
            </div>
            <h1>Como jogar</h1>
            <ul>
                <li>
                    Clique em todos os V-Razors.
                </li>
                <li>
                    Faça o desafio no menor tempo que conseguir.
                </li>
                <li>
                    Clique apenas com os dedos indicadores.
                </li>
            </ul>
            <button onclick="window.location.href = 'jogo.php'">jogar</button>
        </div>
        <div id="box-image">
            <img src="img/vrazor-regras.png" lazy="loading">
        </div>
    </div>
</body>
</html>
