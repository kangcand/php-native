<?php

function tampilkanAngka($jumlah, $indeks = 1)
{
    // echo "Perulangan ke-{$indeks} <br>";

    # panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
    echo "Perulangan ke-{$indeks} <br>";

}

tampilkanAngka(20);
// jumlah = 20
// indeks = 1
//  jika indeks  < 20 maka panggil fungsi
// tampilkanAngka(jumlah, indeks + 1)
