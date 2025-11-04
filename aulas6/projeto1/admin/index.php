<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <link rel="stylesheet" href="../css/produtos.css">
</head>
<body>
    <h1>Painel administrativo</h1>
    <nav>
        <a href="index.php">INÍCIO</a>
        <a href="?pg=clientes-admin">Clientes</a>
        <a href="?pg=paginas-admin">Administrar Páginas</a>
        <a href="?pg=produtos-admin">Produtos</a>
    </nav>
    <?php   
    // área de conteúdo
    if(empty($_SERVER['QUERY_STRING'])){
        $var = "principal";
        include_once "$var.php";
    }elseif(isset($_GET['pg'])){
        $pg = $_GET['pg'];
        include_once "$pg.php";
    }else{
        echo "Página não encontrada!";
    }
    ?>
</body>
</html>
