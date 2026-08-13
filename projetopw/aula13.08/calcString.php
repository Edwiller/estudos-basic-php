<?php

    $string = $_GET['texto'];

    function calcCac($string){
        $tamString = mb_strlen($string);
        return "O tamanho da String eh: $tamString";
    }

    echo calcCac($string);

?>