<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css"/>
    <title>EU</title>
</head>
<body>
    <div>
        <?php
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $sexo = $_GET["sexo"];
        
        echo " Oi, eu me chamo ".$nome. " tenho ".$idade." anos e o meu sexo é ".$sexo;
        
        ?>
    </div>
</body>
</html>