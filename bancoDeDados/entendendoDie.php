<?php

    echo "Testando as funcões die() e exit() em php<br>";

    echo "Linha exibida apenas se o script não for interpretado!<br>";
    
    $senha = "123";

    echo "Senha criptografada com md5() :" . md5($senha);
    
    echo "<br>Senha criptografada com password_hash(): " . password_hash($senha, PASSWORD_DEFAULT);

    $senhaCrip = '$2y$10$NFphLnWaNIN6.h6nIcFxR.JSa5rzA70kM.oxjtYo9o6X0MUpzeTzK';

    if (password_verify($senha, $senhaCrip)){
        echo "<br>Senhas iguais";
    } else{
        echo "<br>Senhas diferentes";
    }