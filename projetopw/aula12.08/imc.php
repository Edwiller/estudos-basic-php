<?php

    $peso = $_GET['peso'];
    $alturacm = $_GET['altura'];
    $alturaM = $alturacm / 100;
    $imc = $peso / ($alturaM * $alturaM);
    echo "Seu IMC é: " . number_format($imc, 2);

?>