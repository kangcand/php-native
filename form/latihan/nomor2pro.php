<?php
if (isset($_POST['pilih'])) {
    $pilih = $_POST['pilihan'];
    if ($pilih == 1) {
        header("location:segitiga.php");
    } else if ($pilih == 2) {
        header("location:lingkaran.php");
    } else if ($pilih == 3) {
        header("location:persegi.php");
    } else if ($pilih == 4) {
        header("location:persegipanjang.php");
    }
}
