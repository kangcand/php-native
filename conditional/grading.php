<?php
$nilai = 60;
$grade = "";
if ($nilai >= 90) {
    $grade = "A";
} else if ($nilai >= 80) {
    $grade = "B";
} else if ($nilai >= 70) {
    $grade = "C";
} else if ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}

switch ($grade) {
    case "A":$ket = "Pertahankan";
        break;
    case "B":$ket = "Harus Lebih baik Lagi";
        break;
    case "C":$ket = "Perbanyak Belajar";
        break;
    case "D":$ket = "Jangan keseringan main";
        break;
    case "E":$ket = "Kebanyakan Bolos";
        break;
    default:"Tidak Ada Pilihan";
        break;
}

echo "Nilai : <b>$nilai</b><br>";
echo "Grade : <b>$grade</b><br>";
echo "Keterangan : <b>$ket</b><br>";
