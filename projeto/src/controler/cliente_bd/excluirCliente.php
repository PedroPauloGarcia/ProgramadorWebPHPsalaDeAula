<?php
require_once "../../conexao.php";

if(!isset($_SESSION)){
    session_start();
}
$idCliente = isset($_POST['idcliente']) ? $_POST['idcliente'] : 0;

$del = "DELETE FROM cliente WHERE idcliente = '$idCliente' "; 
$sql_query = $conexao->query($sql_code);
// $delgo = sql_query ($del) or die ('Erro ao deletar'); 
// echo "deletado";

header("../../index.php");