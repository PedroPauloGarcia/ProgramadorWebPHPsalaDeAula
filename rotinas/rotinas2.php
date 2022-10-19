<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>
</head>

<body>
    <div>
        <h1 style="text-align: center;">Procedimentos, funções e métodos.</h1>
        <h4 style="text-align: center;">restando funções</h4>
        <hr>
        <br>
        <pre>
            <?php

                include "funcoes.php";
                include "funcoes2.php";

                escreva_texto2("texto normal");
                $texto = escreva_texto3("Texto com retorno");
                echo $texto;
                $br = pule_linha1(5);
                echo "$br";
                $agora = hoje1();
                echo "$agora";
                $br = pule_linha1(1);
                echo "$br";
                
            ?>
        </pre>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>