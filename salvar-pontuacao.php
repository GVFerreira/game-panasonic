<?php
    include('connection.php');

    // Recupera o celular do usuário salvo na sessão
    $celular = $_SESSION["celular"];

    // Recupera a pontuação enviada pelo JavaScript
    $pontuacao = $_GET["pontuacao"];

    // Prepara a query para inserir a pontuação e o celular no banco de dados
    
    $sql = "INSERT INTO `pontuacao-game` (`id`, `celular`, `pontuacao`, `data_jogo`) VALUES (NULL, '$celular', '$pontuacao', CURRENT_DATE());";

    // Executa a query no banco de dados
    if (mysqli_query($conn, $sql)) {
        echo "Pontuação salva com sucesso!";
    } else {
        echo "Erro ao salvar a pontuação: " . mysqli_error($conn);
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conn);

?>