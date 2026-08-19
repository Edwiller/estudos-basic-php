<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=loja", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM produtos";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $produtos = $stmt->fetchAll(PDO::FETCH_OBJ);

    echo "<table style='border:1px solid'>";
    echo "<tr>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Ação</th>
          </tr>";

    foreach ($produtos as $produto) {

        echo "<tr>";

        echo "<td>" . $produto->nome . "</td>";
        echo "<td>" . $produto->quantidade . "</td>";
        echo "<td>" . $produto->preco . "</td>";

        echo "<td>
                <button onclick='excluirProduto($produto->id, this)'>
                    Excluir
                </button>
              </td>";

        echo "</tr>";
    }

    echo "</table>";

    echo "<a href='index.html'>Página inicial</a>";

} catch (PDOException $erro) {
    echo $erro->getMessage();
}

?>

<script>

    function excluirProduto(id, botao) {

        fetch("excluirProdutos.php?id=" + id)

            .then(function (resposta) {
                return resposta.text();
            })

            .then(function (resultado) {

                console.log(resultado);

                botao.closest("tr").remove();

            })

            .catch(function (erro) {

                console.log("Erro ao excluir: " + erro);

            });

    }

</script>