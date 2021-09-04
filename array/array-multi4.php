<?php
$example = [
    [
        'nama' => "abdul",
        'peliharaan' =>
        [
            ['nama' => "kelinci"],
            ['nama' => "marmot"],
        ],
    ],
    [
        'nama' => 'priyadi',
        'peliharaan' =>
        [
            ["nama" => "burung"],
            ["nama" => "ayam"],
            ["nama" => "kucing"],
        ],
    ],
];

foreach ($example as $data) {
    echo "Nama Pemilik : " . $data['nama'] . "<br>";
    echo "Daftar Hewan Peliharaan :";
    echo "<ul>";
    foreach ($data['peliharaan'] as $peliharaan) {
        echo "<li>" . $peliharaan['nama'] . "</li>";
    }
    echo "</ul>";

}
