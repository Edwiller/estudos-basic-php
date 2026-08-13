<?php

    $temperatura = $_GET['temperatura'];

    function Converter($temperatura){
        return $temperatura * 1.8 + 32;
    }

    echo Converter($temperatura);

    
?>
