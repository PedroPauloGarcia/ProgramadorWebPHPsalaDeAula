<?php

$hostname = "localhost";
$usuario = "root";
$senha = "";
$banco_de_dados = "projeto";


$conexao = new mysqli($hostname, $usuario, $senha, $banco_de_dados);

if($conexao->connect_errno){ //error + number = errno
    echo "Falha ao conectar: (" . $conexao->connect_errno . ")" . $conexao->connect_errno;
} else{
    // echo "Conectado ao Banco.<br>";
}