<?php

    require_once"config.inc.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $cliente = $_REQUEST["cliente"];
    $cidade = $_REQUEST["cidade"];
    $estado = $_REQUEST["estado"];
    }else{
        echo "<H2> Envio de dados não permitidos</H2>";
    }
    $sql = "INSERT INTO clientes (nome, cidade, estado) VALUES ('$cliente', '$cidade', '$estado')";

    $insert = mysqli_query($conexao, $sql);

if($insert){
    echo "<H2> Cliente cadastrado com sucesso! </H2>";
    echo "<a href='?pg=clientes-admin'>Voltar</a>";
}else{
    echo "<H2> Erro ao cadastrar cliente. </H2>";
}