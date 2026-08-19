<?php

    $nome = $_GET['nome'];
    $quantidade = $_GET['quantidade'];
    $preco = $_GET['preco'];
    $dtValidade = $_GET['dtValidade'];

    try{
        $conn = new PDO("mysql:host=localhost;dbname=Loja",
                    "root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO Produtos(nome,quantidade,preco,data_validade) VALUES (?,?,?,?)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $quantidade);
        $stmt->bindParam(3, $preco);
        $stmt->bindParam(4, $dtValidade);

        $stmt->execute();
        echo "Produto cadastrado com sucesso!";
        echo "<a href='index.html'>Página inicial</a>";
    
    }catch(PDOException $erro){
        echo "Erro: Erro na base de dados";
        echo $erro->getMessage();
    }






?>