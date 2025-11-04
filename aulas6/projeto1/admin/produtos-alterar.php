<?php
    require_once 'config.inc.php';
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['decricao'];
    $preco = $_POST['preco'];

    $sql = "UPDATE produtos SET nome = '$nome', descricao = '$descricao',
            preco = '$preco'
            WHERE id = '$id'";

    echo $sql;
    if($resultado = mysqli_query($conexao, $sql)){
        echo "<br><h2>Produto alterado com sucesso!";
        echo "<a href='?pg=produtos-admin'>Voltar</a>";
    }else{
        echo "<br><h3>Erro ao alterar cliente</h3>";
        echo "<a href='?pg=produtos-admin'>Voltar</a>";
    }
