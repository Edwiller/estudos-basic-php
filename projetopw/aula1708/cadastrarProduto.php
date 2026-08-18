<?php

    $nome = $_GET['nome'];
    $quantidade = $_GET['quantidade'];
    $preco = $_GET['preco'];
    $dtValidade = $_GET['dtValidade'];

    try{
        $conn = new PDO("mysql:host=localhost;dbname=Loja",
                    "root","");
        var_dump($conn);
    }catch(PDOException $erro){
        echo "Erro: Erro na base de dados";
        //echo $erro->getMessage();
    }






?>