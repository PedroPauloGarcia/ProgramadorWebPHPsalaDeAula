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
        <h3>Cadastro de Usuário</h3>
        <form action="prog7r.php" method="post">
            Login:<br>
            <input type="text" name="Login"><br>
            Senha:<br>
            <input type="password" name="Senha"><br>
            Perfil:<br>
            <select name="Perfil" id="">
                <option value="admin">Administrador</option>
                <option value="user">Usuário</option>
            </select>
            <input type="submit" value="Salvar">
        </form>

    </div>
</body>
</html>