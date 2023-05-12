<?php
    // Conectar ao banco de dados
    $servername = "localhost";
    $username = "gustavo_admin";
    $password = "Ez**CmxTPiBFYerT";
    $dbname = "game-panasonic";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar a conexão
    if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }
?>
