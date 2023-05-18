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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    </head>
    <body id="body-cadastro">
        <img id="img-panasonic" src="img/logo-panasonic.svg">
        <div id="container-cadastro">
            <form id="form" action="envio-form.php" method="POST">
                <h1>valide seu cadastro</h1>
                <p>Digite apenas números</p>
                <input type="text" name="celular" id="inputNumber" class="celular" maxlength="15" placeholder="Celular: (DD) 91122-3344" autofocus required>
                <button type="submit">validar</button>
            </form>
            <div id="numberpad">
                <button class="number">1</button>
                <button class="number">2</button>
                <button class="number">3</button>
                <button class="number">4</button>
                <button class="number">5</button>
                <button class="number">6</button>
                <button class="number">7</button>
                <button class="number">8</button>
                <button class="number">9</button>
                <button id="clear">C</button>
                <button class="number">0</button>
                <button style="cursor: not-allowed"></button>
            </div>
        </div>
        <script>
            // Obtém o elemento de entrada de texto
            var inputNumber = document.getElementById("inputNumber")

            // Obtém todos os botões numéricos
            var numberButtons = document.getElementsByClassName("number")

            // Percorre todos os botões numéricos e adiciona um evento de clique
            for (var i = 0; i < numberButtons.length; i++) {
                numberButtons[i].addEventListener("click", function() {
                    var number = this.textContent
                    inputNumber.value += number
                    applyMask()
                })
            }

            // Obtém o botão de limpar (Clear)
            var clearButton = document.getElementById("clear")

            // Adiciona um evento de clique para limpar o número digitado
            clearButton.addEventListener("click", function() {
                inputNumber.value = ""
            })

            // Aplica a máscara ao valor inserido
            function applyMask() {
                var value = inputNumber.value.replace(/\D/g, "")
                var formattedValue = ""
                var count = 0
                for (var i = 0; i < value.length; i++) {
                    if (count === 0) {
                        formattedValue += "("
                    } else if (count === 2) {
                        formattedValue += ") "
                    } else if (count === 7) {
                        formattedValue += "-"
                    }
                    formattedValue += value[i]
                    count++
                }
                inputNumber.value = formattedValue.substring(0, 15)
            }
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                $(document).ready(() => {
                    $('#inputNumber').mask('(99) 99999-9999')
                })
            })

        </script>

        <?php
            if (isset($_GET['alerta']) && $_GET['alerta'] == 1) {
                echo '<script defer>alert("Celular não cadastrado. Por favor, faça o seu cadastro.");</script>';
            };
        ?>
    </body>
    <style>
        #numberpad {
            margin-top: 3rem;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        #numberpad button {
            color: #000;
        }
    </style>
</html>
