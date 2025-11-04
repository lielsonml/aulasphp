<?php
    require_once 'config.inc.php';
    
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: ?pg=clientes-admin");
        exit();
    }

    if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
        echo "<h2>ID do cliente inválido</h2>";
        echo "<p><a href='?pg=clientes-admin'>Voltar para lista de clientes</a></p>";
        exit();
    }

    $id = mysqli_real_escape_string($conexao, $_POST['id']);
    $nome = mysqli_real_escape_string($conexao, $_POST['cliente']);
    $cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
    $estado = mysqli_real_escape_string($conexao, $_POST['estado']);

    if (empty($nome) || empty($cidade)) {
        echo "<h2>Por favor, preencha todos os campos obrigatórios</h2>";
        echo "<p><a href='?pg=clientes-alterar-form&id=$id'>Voltar</a></p>";
        exit();
    }

    $sql = "UPDATE clientes SET cliente = '$nome', cidade = '$cidade', estado = '$estado' WHERE id = '$id'";

    if($resultado = mysqli_query($conexao, $sql)){
        echo "<div class='success'>";
        echo "<h2>Cliente alterado com sucesso!</h2>";
        echo "<p><a href='?pg=clientes-admin'>Voltar para lista de clientes</a></p>";
        echo "</div>";
    }else{
        echo "<div class='error'>";
        echo "<h2>Erro ao alterar cliente</h2>";
        echo "<p>Erro: " . mysqli_error($conexao) . "</p>";
        echo "<p><a href='?pg=clientes-alterar-form&id=$id'>Tentar novamente</a> | ";
        echo "<a href='?pg=clientes-admin'>Voltar para lista de clientes</a></p>";
        echo "</div>";
    }


