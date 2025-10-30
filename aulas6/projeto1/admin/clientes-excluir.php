<?
    require_once "config.inc.php";

    $id = $_GET['id'];
    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if (mysqli_query($conexao, $sql)) {
        echo "<h2> Cliente excluído com sucesso!</h2>";
        echo "<p><a href='?pg=clientes-admin'>Voltar para Administração de Clientes</a></p>";
    } else {
        echo "Erro ao excluir cliente: " . mysqli_error($conexao);
        echo "<p><a href='?pg=clientes-admin'>Voltar para Administração de Clientes</a></p>";   
    }
