<?php
function soma($a, $b) {
    return $a + $b;
}
function subtrai($a, $b) {
    return $a - $b;
}
function multiplica($a, $b) {
    return $a * $b;
}
function divide($a, $b) {
    if ($b == 0) {
        return "Erro: Divisão por zero.";
    }
    return $a / $b;
}