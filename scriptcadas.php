<?php
    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $sexo= NULL;
    $pass= $_POST['senha'];

    $query= "INSERT INTO usuarios VALUES ('$nome', '$email', '$sexo', '$pass');";
    $conexao = new PDO('mysql:host=127.0.0.1:3306;dbname=sitepessoal', 'root', '');
    header('Location: login.html');
?>