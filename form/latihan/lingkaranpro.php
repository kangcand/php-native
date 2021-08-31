<?php
if (isset($_POST['save'])) {
    $a = $_POST['jari'];
    // var_dump($a);
    $luas = 3.14 * $a * $a;
    $keliling = 3.14 * (2 * $a);
    echo "Jari-jari = $a<br>";
    echo "Luas = $luas<br>";
    echo "keliling = $keliling<br>";
}
