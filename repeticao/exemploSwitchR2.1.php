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
            Exercitando condições de multiplos casos com switch.
        </p>
        <p>
            Escreva um número, de acordo com a sua escolha e veja o resuldado da operação aritimédica.
        </p>
        <?php
            $numero = $_POST["numero"];
            $operacao = $_POST["operacao"];

            switch($operacao){
                case 1:
                    $resposta = $numero * 2;
                    break;
                case 2:
                    $resposta = pow($numero, 3);    
                    break;
                case 3:
                    $resposta = sqrt($numero);
                    break;
            }

            echo "O resultado da operação solicitada foi : $resposta";

        ?>
        <br>
        <a href="exemploSwitch.html">
        <i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i>
        </a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>