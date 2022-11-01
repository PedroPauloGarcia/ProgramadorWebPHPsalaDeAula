<?php
//https://campuscode.com.br/conteudos/o-calculo-do-digito-verificador-do-cpf-e-do-cnpj#:~:text=O%20c%C3%A1lculo%20de%20valida%C3%A7%C3%A3o%20do,2%20e%20somamos%20esse%20resultado.

//Desafio implementar a validação do cpf


function verifica_cpf($cpf){
    $cpf = preg_replace(".","", $cpf);
    $cpf = preg_replace("-","", $cpf);
    $cpf_v = str_split($cpf);
    $cpf_v[11];
    
    for ($cpf_v = 0; $cpf_v < 9; $cpf_v++) {
        $sum += $cpf[$cpf_v] * ($number_to_multiplicate--); 
    }

    return true;
}