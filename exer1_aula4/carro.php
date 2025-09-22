<?php
    $preco =$_POST['preco'];
    if ($preco >= 40000 and $preco < 70000){
        $preco_total= $preco * 0.10 + $preco * 0.15 + $preco;
    }
    elseif ($preco >= 70000){
        $preco_total= ($preco * 1.15) + ($preco * 1.20);
    }
    else {
        $preco_total= $preco * 1.05;
    }
echo "valor total vai ser $preco_total";