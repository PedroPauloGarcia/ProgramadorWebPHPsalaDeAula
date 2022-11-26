<?php

$hostname = "localhost";
$banco_de_dados = "projeto";
//$banco_de_dados = "id19904108_projetobd";
$usuario = "root";
//$usuario = "id19904108_desenvole";
$senha = "";
//$senha = "WUFwCQq8Ce_p6r2~";

$conexao = new mysqli($hostname, $usuario, $senha, $banco_de_dados);
if($conexao->connect_errno){ // error + number = errno
    echo "Falha ao conectar: (" . $conexao->connect_errno .")" . $conexao->connect_error;
} else {
    // echo "Conectado ao Banco.<br>";
}