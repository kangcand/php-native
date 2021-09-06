<?php

function luasSegitiga()
{
    $alas = 10;
    $tinggi = 5;
    $luas = ($alas * $tinggi) / 2;
    return $luas;
}

echo "Luas Segitiga : " . luasSegitiga();
