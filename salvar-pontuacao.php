<?php
    session_start();
    include("connection.php");

    // Obtenha o celular do jogador dos cookies
    $celular = $_COOKIE['celular'];

    // Obtenha a pontuação atual do jogador
    $pontuacaoAtual = $_GET['pontuacaoAtual'];

    // Obtenha os acertos atual do jogador
    $acertosAtual = $_GET['acertos'];

    // Verifique se o jogador já possui uma pontuação registrada
    $sqlVerificarPontuacao = "SELECT pontuacao FROM cadastros_lp WHERE celular = '$celular'";
    $result = $conn->query($sqlVerificarPontuacao);
    $row = $result->fetch_assoc();

    if ($row) {
        // O jogador já possui uma pontuação registrada, verifique se a pontuação atual é maior
        $pontuacaoRegistrada = $row['pontuacao'];
        $acertosRegistrado = $row['acertos'];
        if ($pontuacaoAtual < $pontuacaoRegistrada) {
            // Atualize a pontuação do jogador na tabela cadastros_lp
            $sqlAtualizarPontuacao = "UPDATE cadastros_lp SET pontuacao = $pontuacaoAtual WHERE celular = '$celular'";
            $conn->query($sqlAtualizarPontuacao);

            if ($acertosAtual > $acertosRegistrado) {
                // Atualize os acertos do jogador na tabela cadastros_lp
                $sqlAtualizarAcertos = "UPDATE cadastros_lp SET acertos = $acertosAtual WHERE celular = '$celular'";
                $conn->query($sqlAtualizarPontuacao);
                
            };
        };
    };
?>
