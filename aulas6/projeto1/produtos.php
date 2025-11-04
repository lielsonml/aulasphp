<?php
require_once 'admin/config.inc.php';

echo "<div class='produtos-container'>";
echo "<h2>Nossos Produtos</h2>";

$sql = "SELECT * FROM produtos ORDER BY nome";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "<div class='produtos-grid'>";
    while ($produto = mysqli_fetch_array($resultado)) {
        echo "<div class='produto-card'>";
        echo "<h3>" . htmlspecialchars($produto['nome']) . "</h3>";
        echo "<p class='descricao'>" . htmlspecialchars($produto['descricao']) . "</p>";
        echo "<p class='preco'>Preço: R$ " . number_format((float)$produto['preco'], 2, ',', '.') . "</p>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "<p>Nenhum produto cadastrado.</p>";
}

echo "</div>";

mysqli_close($conexao);
?>