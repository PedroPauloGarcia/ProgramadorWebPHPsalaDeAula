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
        
        $a = $_GET["n1"];
        $b = $_GET["n2"];
        $c = $_GET["n3"];

        if($a > $b && $a > $c){
            echo "<h1 style='text-align: center'>O primeiro é o maior, mané</h1";
        } else if($b > $a && $b > $c) {
            echo "<h1 style='text-align: center'>O segundo é o maior, paspalho</h1";
        } else {
            echo "<h1 style='text-align: center'>O terceiro é o maior, bobão</h1";
        }
        

     ?>
    <a href="prog7.html"><h3>Voltar</h3></a>
</div>
</body>
</html>