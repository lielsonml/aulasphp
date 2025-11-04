<?php
require_once "admin/config.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente = mysqli_real_escape_string($conexao, $_POST["cliente"]);
    $cidade = mysqli_real_escape_string($conexao, $_POST["cidade"]);
    $estado = mysqli_real_escape_string($conexao, $_POST["estado"]);
    
    $sql = "INSERT INTO clientes (cliente, cidade, estado) VALUES ('$cliente', '$cidade', '$estado')";
    
    if (mysqli_query($conexao, $sql)) {
        header("Location: index.php?pg=cliente-cadastro-form&success=1");
        exit();
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
    
    mysqli_close($conexao);
} else {
    header("Location: index.php?pg=cliente-cadastro-form");
    exit();
}