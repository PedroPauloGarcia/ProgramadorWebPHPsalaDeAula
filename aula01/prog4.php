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
		$num1 = $_GET["num1"];
		$num2 = $_GET["num2"];
       
    $total = ($num1 + $num2);
		echo "A soma de ".$num1." + ".$num2." = ". ($num1 + $num2);
    echo "<br>A soma de ".$num1." + ".$num2." = ". $total;
    
    echo "<br>A multiplicação de ".$num1." x " .$num2." = ". ($num1 * $num2);
    echo "<br>A multiplicaçao de ".$num1." x ".$num2." = ". $total;

    ?>
    <br/>
    <br/>
    
</div>
</body>
</html>