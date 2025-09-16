<?php
$arquivo = fopen("tabuada.txt", "a");
$num1=(int) $_REQUEST['num1'];

for ($i = 1; $i <= 10; $i++) {
    fwrite($arquivo, "$num1 x $i = " . ($num1 * $i) . "\n");
    echo "$num1 x $i = " . ($num1 * $i) . "<br>";
}
fclose($arquivo);



