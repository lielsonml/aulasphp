<?php
    require "config.inc.php";
    $id = $_REQUEST["id"];

    $sql = "SELECT * FROM produtos WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            $nome = $dados["nome"];
            $descricao = $dados["descricao"];
            $preco = $dados["preco"];
            $id = $dados["id"];
        }

?>
<h2>Alteração de dados do Produto</h2>
<form action="?pg=produtos-altera" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$nome?>" required><br>
    <label>Descrição:</label>
    <input type="text" name="descricao" value="<?=$descricao?>" required><br>
    <label>Preço:</label>
    <input type="text" name="preco" value="<?=$preco?>"><br><br>
    <input type="submit" value="Alterar Produto">
    <a href="?pg=produtos-admin" class="button">Cancelar</a>
</form>
<?php
}else{
        echo "<br><h2>Nenhum Produto encontrado</h2>";
    }
?>

