<?php

    $numero1 = $_GET['num1'];
    $numero2 = $_GET['num2'];
    $numero3 = $_GET['num3'];

    function maiorMenor($numero1, $numero2, $numero3) {
        $vetor = [$numero1, $numero2, $numero3];
        $maior = max($vetor);
        $menor = min($vetor);
        return "O maior número eh:  $maior  e o menor número eh: $menor ";
    }

    echo maiorMenor($numero1, $numero2, $numero3);

?>