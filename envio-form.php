<?php
    include('connection.php');

    // Obtém o número de telefone informado pelo usuário
    $celular = $_POST["celular"];
    $_SESSION['celular'] = $celular;
    $_SESSION['teste'] = 'Testando';

    // Executar consulta SELECT para verificar se o telefone já existe
    $sql = "SELECT * FROM cadastros_lp WHERE celular = '$celular'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        echo "<script>var telefoneNaoEncontrado = true</script>";
    } else {
        header("Location: regras.php");
        exit();
    }

    $conn->close();
?>