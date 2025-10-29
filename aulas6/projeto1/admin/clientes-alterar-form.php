<?php
 require_once "config.inc.php";

 $id = $_REQUEST['id'];
 $sql = "SELECT * FROM clientes WHERE id = $id";
 $resultado = mysqli_query($conexao, $sql);
 if(mysqli_num_rows($resultado) > 0){
    while($dados = mysqli_fetch_array($resultado)){
        $nome = $dados['cliente'];
        $cidade = $dados['cidade'];
        $estado = $dados['estado'];
        $id = $dados['id'];
    }
 
?>
 <form action ="?pg=clientes-alterar" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome:</label>
        <input type="text" name="cliente" valuel="<?=$nome?>" required><br>
        
        <label">Cidade:</label>
        <input type="text" name="cidade" value="<?=$cidade?>" required><br>
        
        <label>Estado:</label>
        <input type="text" name="estado" value="<?=$estado?>"><br><br>
        
        <input type="submit" value="Cadastrar Cliente">
    </form>
<?php
    }else{
    echo "<H2> Cliente não encontrado</H2>";
    }
    ?>