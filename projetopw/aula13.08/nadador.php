<?php

    $idade = $_GET['idade'];

    function calcIdade($idade){
         if ($idade >= 5 && $idade <= 7) {
        echo "Você se encaixa em Infantil A!";
        }
        elseif ($idade >= 8 && $idade <= 10) {
            echo "Você se encaixa em Infantil B!";
        }
        elseif ($idade >= 11 && $idade <= 13) {
            echo "Você se encaixa em Juvenil A!";
        }
        elseif ($idade >= 14 && $idade <= 17) {
            echo "Você se encaixa em Juvenil B!";
        }
        elseif ($idade >= 18) {
            echo "Você é adulto!";
        }
        else {
            echo "Idade fora das categorias!";
        }
    }

    echo calcIdade($idade);

?>

