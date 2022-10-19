<?php

//procedimentos

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

        
        function soma(){
            $valores = func_get_args(); //pega os argumentos e devolve um array;
            $qtd = count($valores);
            $qtd2 = func_num_args(); //retorna um inteiro que representa a quantiidade de argumentos;
            $total = 0;
            echo "A soma de:";
            for($i = 0; $i < $qtd; $i++){
                $total += $valores[$i];
                echo $valores[$i] . ($i == $qtd -1 ? " = " : " + ");
            }
            echo "$total";
        }
        
        function subtração($numero, $numero2){
            $menos = $numero - $numero2;
            echo "Resultado da subtração: $menos";
        }
        function multiplicacao($numero, $numero2){
            $calculo = $numero * $numero2;    
            echo "Resultado da multiplicação: $calculo";  
        }

    function dividindo2($numero, $numero2){
        if($numero2 == 0){
            echo "Erro, não é possivel dividir por zero ";
        }else{
            $div = $numero / $numero2;
            echo "Resultado da divisão: $div";
    }
    }
            