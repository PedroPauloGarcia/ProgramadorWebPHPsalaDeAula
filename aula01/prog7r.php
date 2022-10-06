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
        <p>
        Escreva um programa
        </p>
        <?php
            $Login = $_POST["Login"];
            $Senha = $_POST["Senha"];
            $Perfil = $_POST["Perfil"];
            
            echo "<h3>Cadastro de Usuário</h3>";

            echo "Login: $Login, Senha: $Senha, Perfil: $Perfil"; 

        ?>
        <br>
        <a href="prog7.php"><h3>Volta</h3></a>

    </div>
</body>
</html>