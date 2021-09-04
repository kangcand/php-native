<?php
// Json Object
$dataJson = '{
    "nama":"Ujang",
    "domisili":"Bandung",
    "usia":23,
    "wni": true,
    "hobi":[
        "Futsal","Main Game", "Main Kelereng"
    ]
}';

$data = json_decode($dataJson);
echo "Nama : " . $data->nama . "<br>";
echo "Usia: {$data->usia} <br>";
echo "WNI : " . ($data->wni == 1 ? "Indonesia" : "Bukan WNI") . "<br>";
echo "Domisili: {$data->domisili} <br>";
echo "Hobi: " . implode(", ", $data->hobi);
