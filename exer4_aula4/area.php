<?php
    $BM = $_POST['BM'];
    $Bm = $_POST['Bm'];
    $h = $_POST['h'];
$area = (($BM + $Bm) * $h) / 2;
echo "A área do trapézio é $area";
