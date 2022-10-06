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
            $desconto2 = 7;
            $total = $valor * $quantidade;
            $valor_total_desconto = 0;


            if($valor > 300){
                $desconto = ($valor * 10) / 100;
            }
            if($quantidade > 5){
                $desconto2 = ($valor * 7) / 100;
            }

            $valor_total_desconto = $total - $desconto - $desconto2;
            
            echo "Valor do Produto R$ ".number_format($valor, 2, ",", ".") .", a Quantidade é: " .$quantidade;
            echo "<br>";
            echo "Desconto = R$ " .number_format($desconto, 2, ",", ".");
            echo "<br>";
            echo "Desconto 2 = R$ " .number_format($desconto2, 2, ",", ".");
            echo "<br>";
            echo "Valor total = R$ " .number_format($total, 2, ",", ".");
            echo "<br>";
            echo "Valor com desconto = R$ " .number_format($valor_total_desconto, 2, ",", ".");

           
        ?>
    <a href="prog5.html"><h3>Volta</h3></a>
    </div>
</body>
</html>