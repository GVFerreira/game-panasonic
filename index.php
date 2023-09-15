<?php
    setcookie("celular", "", time() - 3600, "/");
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
    <body id="body-index">
        <div id="container-iniciar">
            <img id="img-panasonic" src="img/logo-panasonic.svg" alt="Panasonic">
            <img id="gif-panasonic" src="img/v-razor.gif" alt="Animação V-Razor">
            <img id="teste" src="img/logo-desafio.png" alt="Desafio Panasonic V-Razor - Precisão para você ir além dos seus limites">
            <button onclick="window.location.href = 'cadastro'">começar</button>
        </div>
    </body>
    <script>
        localStorage.removeItem('minha-pontuacao')
        localStorage.removeItem('acertos')
    </script>
</html>
