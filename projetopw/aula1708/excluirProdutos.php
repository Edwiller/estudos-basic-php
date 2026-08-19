<?php

    try{
        $conn = new PDO("mysql:host=localhost;dbname=loja", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $id = $_GET['id'];
        $sql = "DELETE FROM produtos WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        echo "Produto excluído com sucesso!";

    }catch(PDOException $erro){
        echo $erro->getMessage();
    }

?>