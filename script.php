<?php
    $usuario = $_POST["campo1"];
    $senha = $_POST["campo2"];

    $query = "SELECT * FROM usuarios WHERE usuario='$usuario' and senha='$senha'";
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=sitepessoal', 'root', ' ');
    $resultado = $conexao->query($query);
    $logado = $resultado->fetch();
    $id_logado = $logado['id'];

    if ($logado == null) {
        // Usuário ou senha inválida
        header('Location: usuario-erro.php');
     } 
     else {
        session_start();
        $_SESSION['usuario_logado'] = $id_logado;
        // Direciona o usuário para o painel administrativo do sistema
        header('Location: welcome.html');
     }
     die();
?>