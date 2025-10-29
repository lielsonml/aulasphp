<?php

    require_once"config.inc.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $cliente = $_REQUEST["cliente"];
    $cidade = $_REQUEST["cidade"];
    $estado = $_REQUEST["estado"];
    }else{
        echo "<H2> Envio de dados não permitidos</H2>";
    }
    $sql = "INSERT INTO clientes (cliente, cidade, estado) VALUES ('$cliente', '$cidade', '$estado')";

        if (mysqli_query($conexao, $sql)) {
            echo "Novo cliente cadastrado com sucesso!";
            echo "<p><a href='?pg=clientes-admin'>Voltar para Administração de Clientes</a></p>";
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
        }
    

    mysqli_close($conexao);