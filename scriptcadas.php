<?php
    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $sexo= NULL;
    $pass= $_POST['senha'];

    $query= "INSERT INTO usuarios VALUES ('$nome', 'NULL', '$email', '$pass')";
    $conexao= $mysqli = new mysqli('127.0.0.1:3306', 'root', '', 'sitepessoal');
    
    mysqli_query($conexao, $query);
    mysqli_close($conexao);
    header('Location: login.html');
?>