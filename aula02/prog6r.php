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

        if($numero > 0){
            echo "<h1 style='text-align: center'>Positivo</h1";
            if($numero > 10){
                echo "<h1 style='text-align: center'>Valido</h1";
            }
        if($numero == 0){
            echo "<h1 style='text-align: center'>Neutro</h1";
        }
        } else {
            echo "<h1 style='text-align: center'>Negativo</h1";
        }
        

     ?>
    <a href="prog6.html"><h3>Voltar</h3></a>
</div>
</body>
</html>