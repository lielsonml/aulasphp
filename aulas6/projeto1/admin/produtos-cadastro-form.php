<section class="form-section">
    <div class="form-card">
        <h2 class="form-title">Cadastrar Novo Produto</h2>

        <form action="?pg=produtos-cadastro" method="post" class="product-form">
            <div class="form-row">
                <label for="nome">Nome do Produto</label>
                <input id="nome" type="text" name="nome" required class="form-control" 
                       placeholder="Digite o nome do produto">
            </div>

            <div class="form-row">
                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" required class="form-control" 
                          placeholder="Descreva o produto" rows="3"></textarea>
            </div>

            <div class="form-row">
                <label for="preco">Preço (R$)</label>
                <input id="preco" type="number" name="preco" required class="form-control" 
                       step="0.01" min="0" placeholder="0,00">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn primary">Cadastrar Produto</button>
                <a href="?pg=produtos-admin" class="btn link">Voltar</a>
            </div>
        </form>
    </div>
</section>