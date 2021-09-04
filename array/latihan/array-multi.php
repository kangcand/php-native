<?php
$data = [
    [
        "namaDosen" => "Aceng Fikri",
        "siswa" =>
        [
            [
                "nama" => "Abdul",
                "mataKuliah" => [
                    ["matkul" => "Fisika"],
                    ["matkul" => "Matematika"],
                    ["matkul" => "Biologi"],
                ],
                "hobi" => [
                    ["hobi" => "Mancing"],
                    ["hobi" => "Main Bola"],
                ],
            ],
            [
                "nama" => "Abdul",
                "mataKuliah" => [
                    ["matkul" => "Fisika"],
                    ["matkul" => "Matematika"],
                    ["matkul" => "Biologi"],
                ],
                "hobi" => [
                    ["hobi" => "Mancing"],
                    ["hobi" => "Main Bola"],
                ],
            ],
            [
                "nama" => "Abdul",
                "mataKuliah" => [
                    ["matkul" => "Fisika"],
                    ["matkul" => "Matematika"],
                    ["matkul" => "Biologi"],
                ],
                "hobi" => [
                    ["hobi" => "Mancing"],
                    ["hobi" => "Main Bola"],
                ],
            ],

        ],

    ],
    [
        "namaDosen" => "Ujang Betok",
        "siswa" =>
        [
            [
                "nama" => "Abdul",
                "mataKuliah" => [
                    ["matkul" => "Fisika"],
                    ["matkul" => "Matematika"],
                    ["matkul" => "Biologi"],
                ],
                "hobi" => [
                    ["hobi" => "Mancing"],
                    ["hobi" => "Main Bola"],
                ],
            ],
            [
                "nama" => "Abdul",
                "mataKuliah" => [
                    ["matkul" => "Fisika"],
                    ["matkul" => "Matematika"],
                    ["matkul" => "Biologi"],
                ],
                "hobi" => [
                    ["hobi" => "Mancing"],
                    ["hobi" => "Main Bola"],
                ],
            ],
            [
                "nama" => "Abdul",
                "mataKuliah" => [
                    ["matkul" => "Fisika"],
                    ["matkul" => "Matematika"],
                    ["matkul" => "Biologi"],
                ],
                "hobi" => [
                    ["hobi" => "Mancing"],
                    ["hobi" => "Main Bola"],
                ],
            ],

        ],

    ],

];
$no = 1;
foreach ($data as $dosen) {
    echo "Nama Wali Dosen : " . $dosen['namaDosen'] . "<br>";
    echo "Daftar Mahasiswa : ";
    echo "<ul>";
    foreach ($dosen['siswa'] as $siswa) {
        echo "<li> Data ke-" . $no++ . "<br>";
        echo "Nama Mahasiswa : " . $siswa['nama'] . "<br>";
        echo "Daftar Mata Kuliah : ";
        echo "<ol>";
        foreach ($siswa['mataKuliah'] as $matkul) {
            echo "<li>";
            echo $matkul['matkul'] . "<br>";
            echo "</li>";

        }
        echo "</ol>";
        echo "Daftar Hobi : ";
        echo "<ol>";
        foreach ($siswa['hobi'] as $hobi) {
            echo "<li>";
            echo $hobi['hobi'] . "<br>";
            echo "</li>";

        }
        echo "</ol>";

        echo "</li><br>";

    }
    echo "</ul>";
    echo "<hr>";

}
