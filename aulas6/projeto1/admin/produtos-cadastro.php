<?php
require_once "config.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($conexao, $_POST["nome"]);
    $descricao = mysqli_real_escape_string($conexao, $_POST["descricao"]);
    $preco = str_replace(',', '.', $_POST["preco"]); // Converte vírgula para ponto
    $preco = mysqli_real_escape_string($conexao, $preco);
    
    $sql = "INSERT INTO produtos (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";
    
    if (mysqli_query($conexao, $sql)) {
        echo "<div class='alert success'>Produto cadastrado com sucesso!</div>";
        echo "<div class='form-actions' style='text-align: center; margin-top: 20px;'>";
        echo "<a href='?pg=produtos-admin' class='btn primary'>Voltar para Lista de Produtos</a>";
        echo "</div>";
    } else {
        echo "<div class='alert error'>Erro ao cadastrar: " . mysqli_error($conexao) . "</div>";
        echo "<div class='form-actions' style='text-align: center; margin-top: 20px;'>";
        echo "<a href='?pg=produtos-cadastro-form' class='btn link'>Tentar Novamente</a>";
        echo "</div>";
    }
} else {
    echo "<div class='alert error'>Método de envio inválido</div>";
    echo "<div class='form-actions' style='text-align: center; margin-top: 20px;'>";
    echo "<a href='?pg=produtos-admin' class='btn link'>Voltar</a>";
    echo "</div>";
}

mysqli_close($conexao);