<?php
    require_once "config.inc.php";

    echo "<p><a href='?pg=produtos-cadastro-form'>Cadastro de Produtos</a></p>";
    echo "<h2>Administração de Produtos</h2>";

    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);
    while ($dados = mysqli_fetch_array($resultado)) {
        echo "ID: " . $dados['id'] . " | ";
        echo "Nome: " . $dados['nome'] . " | ";
        echo "Descrição: " . $dados['descricao'] . " | ";
        echo "Preço: " . $dados['preco'] . " | ";
        echo " | <a href='?pg=produtos-alterar-form&id=$dados[id]'>Alterar</a>";
        echo " | <a href='?pg=produtos-excluir&id= $dados[id]'>Excluir</a>";
        echo "<hr>";
    }
    mysqli_close($conexao);
?>