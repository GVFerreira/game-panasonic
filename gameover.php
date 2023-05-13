
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>V-Razor Game</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body id="body-gameover">
        <img id="img-panasonic" src="img/logo-panasonic.svg">
        <div id="container-gameover">
            <div id="ranking">
                <h1>ranking</h1>
                <table id="tabela">
                    <thead>
                        <tr>
                            <th>Posição</th>
                            <th>Nome</th>
                            <th>Tempo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Nome jogador</td>
                            <td>23.095</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Nome jogador</td>
                            <td>22.459</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Nome jogador</td>
                            <td>22.001</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Nome jogador</td>
                            <td>21.984</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Nome jogador</td>
                            <td>21.595</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Nome jogador</td>
                            <td>20.095</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Nome jogador</td>
                            <td>19.432</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Nome jogador</td>
                            <td>18.009</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Nome jogador</td>
                            <td>17.678</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Nome jogador</td>
                            <td>15.050</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Nome jogador</td>
                            <td>15.005</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="restart">
                <h1>Tempo Esgotado...</h1>
                <p>Seu tempo: <span id="minha-pontuacao"></span> segundos</p>
                <button id="btn-restart" onclick="window.location.href = 'index.php'">reiniciar</button>
            </div>
        </div>
    </body>
    <script>
        const spanPontuacao = document.getElementById('minha-pontuacao')
        const pontuacao = window.localStorage.getItem("minha-pontuacao")
        spanPontuacao.innerText = pontuacao

        let xmlhttp = new XMLHttpRequest()
        xmlhttp.open("GET", "salvar-pontuacao.php?pontuacao=" + pontuacao, true)
        xmlhttp.send()
    </script>
</html>
