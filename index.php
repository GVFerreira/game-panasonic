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
    </head>
    <body id="body-index">
        <div id="container-iniciar">
            <img id="img-panasonic" src="img/logo-panasonic.svg" alt="">
            <button onclick="window.location.href = 'cadastro.php'">começar</button>
        </div>
    </body>
    <script>localStorage.removeItem('minha-pontuacao')</script>
</html>
