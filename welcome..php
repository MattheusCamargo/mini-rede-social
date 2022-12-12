<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOOSE</title>
    <link rel="shortcut icon" href="imagens/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header><h1>SEJA BEM VINDO AO GOOSE, </h1>
    </header>
    <main class="principal">
        <main class="chat">
            <?php
            use Swoole\WebSocket\Server;
            $servidor = new Server(host:'0.0.0.0', port:8080);
            $servidor->on(event_name:'message', function(Server $servidor, Frame $mensagem) { 
                $conexoes = $servidor->connections;
                $origem = $mensagem->fd;

                foreach ($conexoes as $conexoes){
                    if($conexao == $origem) continue;
                    $servidor->push($conexao, json_encode(['type' => 'chat', 'text' => $mensgem->data])
                );
                }
            });
            $servidor->start()
            ?>
           <header class="cabechat"><h4>MENSAGEM</h4></header>
        
    
        </main>
    </main>
    <footer></footer>
</body>
</html>