<?php
require_once "../../protect.php";
require_once "../../conexao.php";

    if(!isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){
        header("Location: nao_permitido.php");
        
        $idCliente = isset($_GET['id']) ? $_GET['id'] : 0;
        
        if($idCliente > 0){
            $del = "DELETE FROM cliente WHERE idcliente = '$idCliente' "; 
            $sql_query = $conexao->query($del);
            
            
        }
        
        header("../../../clientes.php");
    } else {
        header("Location: ../../../nao_permitido.php");
    }