<?php
    $salario = $_POST['salario'];
    $vendas = $_POST['vendas'];
$salario_total = $salario + ($vendas * 0.04);
echo "O salário total é $salario_total";
?>