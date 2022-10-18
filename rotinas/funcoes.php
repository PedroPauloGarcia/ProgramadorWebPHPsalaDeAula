<?php
    date_default_timezone_set("America/Sao_Paulo");

    function escreva_texto(){
        echo "<p style='text-align: center;'>Minha primeira função</p>";
    }
    
    function escreva_texto2($texto){
        echo "<p style='text-align: center;'>$texto</p>";
    }

    function hoje(){
    $agora = date('d/m/Y H:i');
    echo "<p style='text-align: center;'>$agora</p>"; 
    }
    
    function pule_linha($linha){
        $br = 1;
        do{          
            echo "<br>";
            $br++;
        }while($br <= $linha);  
        }

    function multiplicacao($numero, $numero2){
            $calculo = $numero * $numero2;    
            echo "resultado da multiplicação: $calculo";  
        }

    function dividindo2($numero, $numero2){
        if($numero || $numero2 = 0){
            echo "erro";
        }
        $div = $numero / $numero2;
        echo "resultado da divisão: $div";
    }

    function soma($numero, $numero2){
        $soma = $numero + $numero2;
        echo "resultado da soma: $soma";
    }

    function subtração($numero, $numero2){
        $menos = $numero - $numero2;
        echo "resultado da subtração: $menos";
    }
