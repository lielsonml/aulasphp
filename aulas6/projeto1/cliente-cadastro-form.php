<?php
// Check if there's a success message
if(isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<div style='color: green; margin-bottom: 20px;'>Cliente cadastrado com sucesso!</div>";
}
?>
<div class="container">
    <h2>Cadastro de Cliente</h2>
    <form action="cliente-cadastro.php" method="post">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="cliente" required class="form-control">
        </div>
        
        <div class="form-group">
            <label>Cidade:</label>
            <input type="text" name="cidade" required class="form-control">
        </div>
        
        <div class="form-group">
            <label>Estado:</label>
            <input type="text" name="estado" required class="form-control">
        </div>
        
        <div class="form-group">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </div>
    </form>
</div>