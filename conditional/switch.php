<?php
$day = date("D");
switch ($day) {
    case 'Sun':$hari = "Minggu";
        break;
    case 'Mon':$hari = "Senin";
        break;
    case 'Tue':$hari = "Selasa";
        break;
    case 'Wed':$hari = "Rabu";
        break;
    case 'Thu':$hari = "Kamis";
        break;
    case 'Fri':$hari = "Jum'at";
        break;
    case "Sun" == "Minggu":$hari = "Senin-Sabtu";
        break;
    case "$day":$hari = "Sabtu";
        break;
    default
        :$hari = "Kiamat";
}
echo "Hari ini hari <b>$hari</b>";
