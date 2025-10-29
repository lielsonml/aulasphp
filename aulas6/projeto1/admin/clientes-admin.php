<?php
    require_once "config.inc.php";

    echo "<p><a href='?pg=clientes-cadastro-form'>Cadastro de Clientes</a></p>";
    echo "<h2>Administração de Clientes</h2>";

    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);
    while ($dados = mysqli_fetch_array($resultado)) {
        echo "ID: " . $dados['id'] . " | ";
        echo "Cliente: " . $dados['cliente'] . " | ";
        echo "Cidade: " . $dados['cidade'] . " | ";
        echo "Estado: " . $dados['estado'] . " | ";
        echo " | <a href='?pg=clientes-alterar-form&id=$dados[id]'>Alterar</a>";
        echo " | <a href='?pg=clientes-excluir&id= $dados[id]'>Excluir</a>";
        echo "<hr>";
    }
    mysqli_close($conexao);
?>