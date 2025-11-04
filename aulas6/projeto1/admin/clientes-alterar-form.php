<?php
    require "config.inc.php";
    if(!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
        echo "<h2>ID do cliente inválido</h2>";
        exit();
    }
    
    $id = mysqli_real_escape_string($conexao, $_GET["id"]);
    $sql = "SELECT * FROM clientes WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        $dados = mysqli_fetch_array($resultado);
        $nome = $dados["cliente"];
        $cidade = $dados["cidade"];
        $estado = $dados["estado"];
        $id = $dados["id"];

?>
<h2>Alteração de dados do cliente</h2>
<form action="?pg=clientes-alterar" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome:</label>
    <input type="text" name="cliente" value="<?=$nome?>" required><br>
    <label>Cidade:</label>
    <input type="text" name="cidade" value="<?=$cidade?>" required><br>
    <label>Estado:</label>
    <input type="text" name="estado" value="<?=$estado?>"><br><br>
    <input type="submit" value="Alterar Cliente">
    <a href="?pg=clientes-admin" class="button">Cancelar</a>
</form>
<?php
}else{
        echo "<br><h2>Nenhum cliente encontrado</h2>";
    }
?>

