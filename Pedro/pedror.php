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
        
        $nome = $_GET["n"];

        if($nome != "guilherme"){
            echo "<h1 style='text-align: center'>Fala seu nome direito</h1>";
        } else{
            echo "<h1 style='text-align: center'>É um mane</h1>";
        }
    
     ?>
    <a href="pedro.html"><h3>Volta</h3></a>
</div>
</body>
</html>