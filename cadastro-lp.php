<?php
    include('connection.php');

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];

    $consulta = "SELECT * FROM cadastros_lp WHERE celular = '$celular'";
    $resultado = mysqli_query($conn, $consulta);

    if(mysqli_num_rows($resultado) > 0) {
        // o celular já existe na tabela, faça algo aqui (ex: exiba uma mensagem de erro)
        echo "<p>Celular cadastrado</p>";
      } else {
        // o celular não existe na tabela, então podemos inserir o novo registro
        $query = "INSERT INTO `cadastros_lp` (`id`, `nome`, `sobrenome`, `celular`, `email`, `data_criacao`) VALUES (NULL, '$nome', '$sobrenome', '$celular', '$email', CURRENT_DATE())";
        mysqli_query($conn, $query);
      }
?>