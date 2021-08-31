<?php
$tahun = date("2020");
$kabisat = ($tahun % 4 == 0) ? "KABISAT" : "BUKAN KABISAT";
echo "Tahun <b>$tahun</b> $kabisat";
