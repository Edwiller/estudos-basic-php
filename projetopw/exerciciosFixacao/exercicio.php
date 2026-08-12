<?php

    function gerarVetor() {
        $vetor = [];

        for ($i = 0; $i < 10; $i++) {
            $vetor[$i] = rand(1, 100);
        }

        return $vetor;
    }

    function mostrarVetor($vetor) {
        foreach ($vetor as $numero) {
            echo $numero . " ";
        }
    }

    function contarQuantidadePares($vetor) {
        $contagem = 0;

        foreach ($vetor as $numero) {
            if ($numero % 2 == 0) {
                $contagem++;
            }
        }

        return $contagem;
    }


    function encontrarMaior($vetor) {
        return max($vetor);
    }


    function calcularMedia($vetor) {
        return array_sum($vetor) / count($vetor);
    }


    function calcularSoma($vetor) {
        return array_sum($vetor);
    }


    function inverterVetor($vetor) {
        return array_reverse($vetor);
    }


    function executarPrograma() {

        $vetor = gerarVetor();

        echo "Vetor original:<br>";
        mostrarVetor($vetor);

        echo "<br><br>";

        $quantidadePares = contarQuantidadePares($vetor);
        echo "Quantidade de números pares: " . $quantidadePares . "<br>";

        echo "<br>";

        $maior = encontrarMaior($vetor);
        echo "O maior número eh: " . $maior . "<br>";

        echo "<br>";

        $media = calcularMedia($vetor);
        echo "A média aritmética eh: " . $media . "<br>";

        echo "<br>";

        $soma = calcularSoma($vetor);
        echo "A soma dos valores eh: " . $soma . "<br>";

        echo "<br>";

        $vetorInverso = inverterVetor($vetor);
 
        echo "Vetor invertido:<br>";
        mostrarVetor($vetorInverso);
    }

    executarPrograma();

?>