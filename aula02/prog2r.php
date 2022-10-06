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
        $valor = $_GET["Valor"];
        $quantidade = $_GET["Quantidade"];
        $desconto = 10;

        if($valor > 100){
            $desconto = ($valor * 10) / 100; //valor * .10;
        }

        echo "Desconto: R$ " . number_format($desconto, 2, ",", ".");
        echo "<br>Valor com desconto: R$ " .number_format($valor - $desconto. 2, ",", ".");


        
     ?>
    <a href="prog2.html"><h3>Volta</h3></a>
</div>
</body>
</html>