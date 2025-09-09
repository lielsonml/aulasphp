<?php
    $arquivo = fopen("arquivos/arquivo.txt", "r");

    while(!feof($arquivo)) {
        $linha = fgets($arquivo);
        echo $linha . "<br>";
    }
    fclose($arquivo);
?>