<?php

    require_once "config.inc.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_REQUEST["nome"];
    $descricao = $_REQUEST["descricao"];
    $preco = $_REQUEST["preco"];
    }else{
        echo "<H2> Envio de dados não permitidos</H2>";
    }
    $sql = "INSERT INTO produtos (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";

        if (mysqli_query($conexao, $sql)) {
            echo "Novo Produto cadastrado com sucesso!";
            echo "<p><a href='?pg=produtos-admin'>Voltar para Administração de Produtos</a></p>";
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
        }
    

    mysqli_close($conexao);