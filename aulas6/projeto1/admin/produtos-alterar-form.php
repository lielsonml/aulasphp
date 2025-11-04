<?php
require "config.inc.php";

if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    echo "<div class='alert error'>ID do produto inválido</div>";
    echo "<div class='form-actions' style='text-align: center; margin-top: 20px;'>";
    echo "<a href='?pg=produtos-admin' class='btn link'>Voltar para Lista</a>";
    echo "</div>";
    exit();
}

$id = mysqli_real_escape_string($conexao, $_GET["id"]);
$sql = "SELECT * FROM produtos WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){
    $dados = mysqli_fetch_array($resultado);
    $nome = htmlspecialchars($dados["nome"]);
    $descricao = htmlspecialchars($dados["descricao"]);
    $preco = htmlspecialchars($dados["preco"]);
    $id = htmlspecialchars($dados["id"]);
?>
<section class="form-section">
    <div class="form-card">
        <h2 class="form-title">Alterar Produto</h2>

        <form action="?pg=produtos-alterar" method="post" class="product-form">
            <input type="hidden" name="id" value="<?=$id?>">
            
            <div class="form-row">
                <label for="nome">Nome do Produto</label>
                <input id="nome" type="text" name="nome" required class="form-control" 
                       value="<?=$nome?>" placeholder="Digite o nome do produto">
            </div>

            <div class="form-row">
                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" required class="form-control" 
                          placeholder="Descreva o produto" rows="3"><?=$descricao?></textarea>
            </div>

            <div class="form-row">
                <label for="preco">Preço (R$)</label>
                <input id="preco" type="number" name="preco" required class="form-control" 
                       step="0.01" min="0" value="<?=$preco?>" placeholder="0,00">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn primary">Salvar Alterações</button>
                <a href="?pg=produtos-admin" class="btn link">Cancelar</a>
            </div>
        </form>
    </div>
</section>
<?php
} else {
    echo "<div class='alert error'>Produto não encontrado</div>";
    echo "<div class='form-actions' style='text-align: center; margin-top: 20px;'>";
    echo "<a href='?pg=produtos-admin' class='btn link'>Voltar para Lista</a>";
    echo "</div>";
}
?>

