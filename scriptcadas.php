<?php
    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $sexo= NULL;
    $pass= $_POST['senha'];

    $query= "INSERT INTO usuarios (nome, email, sexo, senha) VALUES ('{$nome}', '{$email}', '{$sexo}', '{$pass}')";
    $conexao= msqli_connect('127.0.0.1:3306', 'root', '', 'sitepessoal');
    mysqli_query($conexao, $query);
    mysqli_close($conexao);
    header('Location: login.html');
?>