<?php
    include('connection.php');

    $nome = trim($_POST["nome"]);
    $sobrenome = trim($_POST["sobrenome"]);
    $celular = $_POST["celular"];
    $email = $_POST["email"];

    $consulta = "SELECT * FROM cadastros_lp WHERE celular = '$celular'";
    $resultado = mysqli_query($conn, $consulta);

    if(mysqli_num_rows($resultado) > 0) {
        header("Location: cadastro-vrazor.php?alerta=1");
        exit();
      } else {
        // o celular não existe na tabela, então podemos inserir o novo registro
        $query = "INSERT INTO `cadastros_lp` (`id`, `nome`, `sobrenome`, `celular`, `email`, `pontuacao`, `data_criacao`) VALUES (NULL, '$nome', '$sobrenome', '$celular', '$email', 60, CURRENT_DATE())";
        mysqli_query($conn, $query);
        header("Location: cadastro-vrazor.php?alerta=0");
        exit();
      }
?>