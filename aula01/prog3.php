<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="stylesheet" href="css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Senac - Curso de PHP</title>
</head>
<body>
<div>
	<br/>
    <p>
    Escreva um programa que imprima a soma de dois números.
    </p><br/>
	
    <?php
		$num1 = "10";
		$num2 = "5"; 
    $total = ($num1 + $num2);
    $total2 = ($num1 * $num2);
    $total3 = ($num1 / $num2);

    echo "<br>A soma de ".$num1." + ".$num2." = ". $total;
    
    echo "<br>A multiplicaçao de ".$num1." x ".$num2." = ". $total2;

    echo "<br>A divisão de ".$num1. " / ".$num2." = ". $total3;

    ?>
    <br/>
    <br/>
    <a href="index.php"><h3>Voltar</h3></a>
</div>
</body>
</html>