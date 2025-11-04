<?php
// Success message (shown after redirect from cliente-cadastro.php?success=1)
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo '<div class="alert success">Cliente cadastrado com sucesso!</div>';
}
?>

<section class="form-section">
    <div class="form-card">
        <h2 class="form-title">Cadastro de Cliente</h2>

        <form action="cliente-cadastro.php" method="post" class="client-form">
            <div class="form-row">
                <label for="cliente">Nome</label>
                <input id="cliente" type="text" name="cliente" required class="form-control" placeholder="Digite o nome completo">
            </div>

            <div class="form-row">
                <label for="cidade">Cidade</label>
                <input id="cidade" type="text" name="cidade" required class="form-control" placeholder="Cidade">
            </div>

            <div class="form-row">
                <label for="estado">Estado</label>
                <input id="estado" type="text" name="estado" required class="form-control" placeholder="Estado (ex: SP)">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn primary">Cadastrar</button>
                <a href="index.php" class="btn link">Voltar</a>
            </div>
        </form>
    </div>
</section>