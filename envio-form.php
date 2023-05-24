<?php
    include('connection.php');

    // Obtém o número de telefone informado pelo usuário
    $celular = $_POST["celular"];
    $DDI = $_POST["DDI"];
    setcookie("celular", $celular, time() + 86400, "/");
    setcookie("DDI", $DDI, time() + 86400, "/");


    // Executar consulta SELECT para verificar se o telefone já existe
    $sql = "SELECT * FROM cadastros_lp WHERE celular = '$celular' AND DDI = '$DDI'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        header("Location: cadastro.php?alerta=1");
        exit();
    } else {
        header("Location: regras.php");
        exit();
    }

    $conn->close();
?>
