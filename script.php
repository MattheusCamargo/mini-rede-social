<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rede Social</title>
</head>
<body>
    <div>
        <?php
            $email= "mattheus@gmail.com";
            $senha= 123456;
            $mail= false;
            $pass= false;
            $us= isset($_POST["campo1"])?$_POST["campo1"]:0;
            if ($us == $email){
                $mail= true;
            }else {
                $mail= false;
            }
            
            $sen= isset($_POST["campo2"])?$_POST["campo2"]:0;
            if ($sen == $senha){
                $pass= true;
            }else {
                $pass= false;
            }

           if ($mail == true && $pass == true){
            header("location: welcome.html");
           } else {
            header("location: login.html");
           }
        ?>
    </div>
</body>
</html>