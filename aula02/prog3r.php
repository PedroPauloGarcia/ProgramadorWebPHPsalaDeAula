<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css"/>
    <title>Parte de PHP</title>
</head>
<body>
<div>
     <?php
        
        $numero = $_GET["n"];
        $resto = $numero % 2;

        if($resto == 0){
            echo "<h1 style='text-align: center'>Par</h1";
        } else {
            echo "<h1 style='text-align: center'>Impar</h1";
        }

     ?>
    <a href="prog3.html"><h3>Volta</h3></a>
</div>
</body>
</html>