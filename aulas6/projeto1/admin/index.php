<?php
echo "Painel administrativo";
?>
<nav>
    <a href="index.php">ÍNICIO</a>
    <a href="?pg=clientes-admin">Clientes</a>
    <a href="?pg=paginas-admin">Administrar Paginas</a>
    <a href="?pg=contato-admin">Adiministrar Contatos</a>
</nav>
<?php   
// área de conteúdo
if(empty($_SERVER['QUERY_STRING'])){
    $var = "principal";
    include_once "$var.php";
}elseif($_GET['pg']){
    $pg = $_GET['pg'];
    include_once "$pg.php";
}else{
    echo "Página não encontrada!";
}
?>