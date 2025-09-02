<?php
    $nome = $_POST['nome'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $media = ($n1 + $n2) / 2;
    echo "A média do aluno $nome é $media";
?>
   