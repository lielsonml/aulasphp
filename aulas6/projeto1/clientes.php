<?php
    require_once 'config.inc.php';

     $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);
    while ($dados = mysqli_fetch_array($resultado)) {
        echo "ID: " . $dados['id'] . " | ";
        echo "Cliente: " . $dados['cliente'] . " | ";
        echo "Cidade: " . $dados['cidade'] . " | ";
        echo "Estado: " . $dados['estado'] . " | ";
    }
    mysqli_close($conexao);
?>