<?php
require_once 'config.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
        echo "<div class='alert error'>ID do produto inválido</div>";
        echo "<div class='form-actions' style='text-align: center; margin-top: 20px;'>";
        echo "<a href='?pg=produtos-admin' class='btn link'>Voltar para Lista</a>";
        echo "</div>";
        exit();
    }

    $id = mysqli_real_escape_string($conexao, $_POST['id']);
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
    $preco = str_replace(',', '.', $_POST['preco']);
    $preco = mysqli_real_escape_string($conexao, $preco);

    $sql = "UPDATE produtos SET nome = '$nome', descricao = '$descricao', preco = '$preco' WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)) {
        echo "<div class='alert success'>Produto alterado com sucesso!</div>";
        echo "<div class='form-actions' style='text-align: center; margin-top: 20px;'>";
        echo "<a href='?pg=produtos-admin' class='btn primary'>Voltar para Lista</a>";
        echo "</div>";
    } else {
        echo "<div class='alert error'>Erro ao alterar produto: " . mysqli_error($conexao) . "</div>";
        echo "<div class='form-actions' style='text-align: center; margin-top: 20px;'>";
        echo "<a href='?pg=produtos-alterar-form&id=" . $id . "' class='btn link'>Tentar Novamente</a>";
        echo "</div>";
    }
} else {
    echo "<div class='alert error'>Método de envio inválido</div>";
    echo "<div class='form-actions' style='text-align: center; margin-top: 20px;'>";
    echo "<a href='?pg=produtos-admin' class='btn link'>Voltar para Lista</a>";
    echo "</div>";
}
