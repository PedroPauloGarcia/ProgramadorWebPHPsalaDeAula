<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/estilo.css"/>
    <title>PHP</title>
</head>
<body> 
    <div>
        <p style="text-align: center;">
            Exercitando condições de multiplos casos com While.
        </p>
        <p>
            Criando dinâmicamente caixas de textos.
        </p>
        <?php
            $i = 1;
            while($i <= 5){
                $v = "num" . $i;
                $url = "v" . $i;
                $$v = $_GET["$url"];
                $i++;
            }
            // echo "$num1 $num2 $num3 $num4 $num5";
            $i = 1;
            while($i <= 5){
                $v = "num" . $i;
                echo "valor $i: " . $$v ."<br>";
                $i++;
            }

        ?>
        <br>
        <a href="exemploWhile2.php">
        <i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>