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
                        <?php
                           // Consulta para obter os dados do ranking atualizado
                           $sql = "SELECT nome, sobrenome, pontuacao FROM cadastros_lp ORDER BY pontuacao ASC LIMIT 10";
                           $results = $conn->query($sql);
                           $posicao = 1;
                   
                           // Exibir o ranking
                           foreach ($results as $result) {
                               $nome = $result['nome'];
                               $sobrenome = $result['sobrenome'];
                               $pontuacao = $result['pontuacao'];
                        ?>
                            <tr>
                                <td><?php echo $posicao; ?></td>
                                <td><?php echo $nome . ' ' . $sobrenome; ?></td>
                                <td><?php echo number_format($pontuacao, 3); ?></td>
                            </tr>
                        <?php
                               $posicao++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="restart">
                <h1>Fim de jogo...</h1>
                <p>Seu tempo: <span id="minha-pontuacao"></span> segundos</p>
                <button id="btn-restart" onclick="window.location.href = 'index.php'">reiniciar</button>
            </div>
        </div>
    </body>
    <script>
        const pontuacao = window.localStorage.getItem("minha-pontuacao")
        const spanPontuacao = document.getElementById('minha-pontuacao')
        spanPontuacao.innerText = pontuacao

        document.addEventListener('DOMContentLoaded', function() {
            // Variável de controle para verificar se a página já foi atualizada
            var paginaAtualizada = false;

            // Verificar se a página já foi atualizada antes de executar o redirecionamento
            if (!paginaAtualizada) {
                // Definir a variável para true para evitar atualizações futuras
                paginaAtualizada = true;

                // Redirecionar para a página novamente após 5 segundos (5000 milissegundos)
                setTimeout(function() {
                    location.reload();
                }, 5000); // 5 segundos
            }
        })
    </script>
</html>
