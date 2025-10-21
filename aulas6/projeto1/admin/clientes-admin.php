<?php

    require "config.inc.php";

    echo <p><a href="?pg=clientes-cadastro-form">Cadastrar Novo Cliente</a></p>;
    echo "<h2>Lista de Clientes</h2>";

    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);

    while($dados = mysqli_fetch_array($resultado)){
        echo "<>";
        echo "ID: " . $dados['id'] . "<br>";
        echo "Nome: " . $dados['nome'] . "<br>";
        echo "Cidade: " . $dados['cidade'] . "<br>";
        echo "Estado: " . $dados['estado'] . "<br>";
        echo "<hr>";
    }