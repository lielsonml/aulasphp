<?php

    require_once 'config.inc.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM produtos WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<br><h2>Produto Excluído com sucesso.</h2>";
        echo "<a href='?pg=produtos-admin'>Voltar</a>";
    }else{
        echo "<br><h2>Erro ao excluir Produto.</h2>";
        echo "<a href='?pg=produtos-admin'>Voltar</a>";
    }