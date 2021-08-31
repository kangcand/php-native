<?php
$sim = "Ya";
$stnk = "tidak";

// Pengecekan Kelengkapan Surat Kendaraan
if ($sim == "Ya") {
    if ($stnk == "Ya") {
        echo "Selamat menjalankan aktifitas,
              hati-hati berkendara";
    } else {
        echo "Maaf anda kami tilang!";
    }
} else {
    echo "Maaf Anda Kami Tilang!!";
}
