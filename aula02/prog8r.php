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
     <h3>Dados do produto</h3>
    <?php
    $valor = $_POST["Valor"];
    $quantidade = $_POST["Quantidade"];
    $parcelar = $_POST["Parcelar"];
   
    echo "Valor total: ".($valor * $quantidade / $parcelar);

   ?>
   
   <a href="prog8.php"><h3>Volta</h3></a>
    </div>
</body>
</html>