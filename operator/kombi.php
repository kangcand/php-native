<?php
$akademik = 85;
$atletik = 80;

echo "Nilai Akademik : <b>$akademik</b><br>";
echo "Nilai Atletik : <b>$atletik</b><br>";
$kelulusan = ($akademik >= 85 && $atletik >= 83)
? "Lulus" : "Tidak Lulus";
echo "dinyatakan : <b>$kelulusan</b>";
