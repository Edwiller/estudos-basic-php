<?php

    $n1 = $_GET['num1'];
    $n2 = $_GET['num2'];
    $n3 = $_GET['num3'];
    function situacaoAluno($n1, $n2, $n3){
        $media = ($n1 + $n2 + $n3) / 3;
        if($media >= 7){
            echo("Aluno aprovado!");
        }
        elseif ($media >= 5 && $media < 7){
            echo ("Aluno de recuperação!");
        }
        else{
            echo("Aluno de final!");
        }
    }
    echo situacaoAluno($n1, $n2, $n3);

?>