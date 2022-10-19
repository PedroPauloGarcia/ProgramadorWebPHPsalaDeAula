<?php

//funcoes em PHP

function escreva_texto3($texto){
    return $texto;
}

function hoje1(){
    $agora = date('d/m/Y H:i');
    return $agora;
}

// function pule_linha1($linha){
//     $br = 1;
//     do{          
//         return "+<br>";
//         $br++;
//     }while($br <= $linha);  
//     }

function pule_linha1($linha){
    
    for($br = 1; $br <= $linha; $br++){
        
        return $linha;
    }
}