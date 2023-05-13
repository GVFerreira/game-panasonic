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
    <body id="body-cadastro">
        <img id="img-panasonic" src="img/logo-panasonic.svg">
        <div id="container-cadastro">
            <form id="form" action="envio-form.php" method="POST">
                <h1>valide seu cadastro</h1>
                <p>Digite apenas números</p>
                <input type="text" name="celular" id="celular" class="celular" placeholder="Celular: (DD) 91234-5678" required>
                <button type="submit">validar</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $(document).ready(() => {
                $('#celular').mask('(99) 99999-9999')
            })
        })
    </script>
</html>
