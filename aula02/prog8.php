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
    <form action="prog8r.php" method="post">
        Valor:<br>
        <input type="text" name="Valor"><br>
        Quantidade:<br>
        <input type="text" name="Quantidade"><br>
        Parcelar em:<br>
        <select name="Parcelar" id="">
            <option value="2x"></option>
            <option value="3x"></option>
            <option value="4x"></option>
            <option value="5x"></option>
            <option value="6x"></option>
            <option value="7x"></option>
            <option value="8x"></option>
            <option value="9x"></option>
            <option value="10x"></option>
        </select>
        
        <input type="submit" value="Comprar">
        </form>
    <?php
    $valor = $_POST["Valor"];
    $quantidade = $_POST["Quantidade"];
    ?>
    </div>
</body>
</html>