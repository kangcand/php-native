<?php

if (isset($_POST['save'])) {
    // input
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $nama = $_POST['nama'];
    $gol = $_POST['gol'];
    $jumlahJam = $_POST['jam'];

    // var default
    $gapok = 0;
    $tunjangan = 0;
    $lembur = 0;
    $pajakgapok = 0;
    $pajaklembur = 0;
    $totalGaji = 0;
    $jamLembur = 0;
    $gajiKotor = 0;
    $totalPajak = 0;

    //proses
    if ($gol == 1) {
        $gapok = 1500000;
        $tunjangan = 150000;
    } else if ($gol == 2) {
        $gapok = 2000000;
        $tunjangan = 200000;
    } else if ($gol == 3) {
        $gapok = 2500000;
        $tunjangan = 250000;
    } else if ($gol == 4) {
        $gapok = 3000000;
        $tunjangan = 300000;
    }

    if ($jumlahJam > 173) {
        $jamLembur = $jumlahJam - 173;
        $lembur = $jamLembur * 20000;
    } else {
        $lembur;
    }

    $pajakgapok = 0.05 * $gapok;
    $pajaklembur = 0.05 * $lembur;
    $gajiKotor = ($gapok + $tunjangan + $lembur);
    $totalPajak = ($pajakgapok + $pajaklembur);
    $totalGaji = $gajiKotor - $totalPajak;

    // output
    // echo "Nama : $nama<br>";
    // echo "Jenis Kelamin : $jk<br>";
    // echo "agama : $agama<br>";
    // echo "Golongan : $gol<br>";
    // echo "jumlah jam kerja : $jumlahJam;<br>";
    // echo "jam lemburan : $jamLembur<br>";
    // echo "Gaji Pokok : $gapok<br>";
    // echo "tunjangan : $tunjangan<br>";
    // echo "uang lembur : $lembur<br>";
    // echo "Pajak Gaji Pokok : $pajakgapok<br>";
    // echo "Pajak Gaji Lembur : Rp. " . number_format($pajaklembur, 2, ',', '.') . "<br>";
    // echo "Total Gaji : Rp. " . number_format($totalGaji, 2, ',', '.');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penggajian</title>
    <style>
        @media print {
            #printPageButton {
                display: none;
            }
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Hitung Penggajian</legend>
        <p style="text-align:center;"><img src="https://smkassalaambandung.sch.id/img/logo-custom.png" style="height: 140px" alt="" srcset=""></p>
        <table style="width:100%;" border="1">
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Golongan Kerja</th>
                <th>Jumlah Jam Kerja</th>
                <th>Jumlah Jam Lembur</th>
            </tr>
            <tr>
                <td><?php echo $nama; ?></td>
                <td><?php echo $jk; ?></td>
                <td><?php echo $agama; ?></td>
                <td>Golongan <?php echo $gol; ?></td>
                <td><?php echo $jumlahJam; ?> Jam</td>
                <td><?php echo $jamLembur; ?> Jam</td>
            </tr>
            <tr rowspan="2">
               <th style="text-align:center;"colspan="6">Keuangan</th>
            </tr>
            <tr>
                <th style="text-align:center;"colspan="5"></th>
                <td style="text-align:center;"colspan="1">Rupiah.</td>
            </tr>
            <tr>
                <th style="text-align:left;"colspan="5">Gaji Pokok</th>
                <td colspan="1"><?php echo number_format($gapok, 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <th style="text-align:left;"colspan="5">Tunjangan</th>
                <td colspan="1"><?php echo number_format($tunjangan, 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <th style="text-align:left;"colspan="5">Uang Lembur</th>
                <td colspan="1"><?php echo number_format($lembur, 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <th style="text-align:left;"colspan="5">Pajak Gaji Pokok</th>
                <td colspan="1"><?php echo number_format($pajakgapok, 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <th style="text-align:left;"colspan="5">Pajak Uang Lembur</th>
                <td colspan="1"><?php echo number_format($pajaklembur, 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <th style="text-align:center;"colspan="6">Gaji Kotor</th>
            </tr>
            <tr>
                <th style="text-align:left;"colspan="5">(Gaji Pokok + Tunjangan + Uang Lembur)</th>
                <td colspan="1"><?php echo number_format($gajiKotor, 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <th style="text-align:center;"colspan="6">Total Pajak</th>
            </tr>
            <tr>
                <th style="text-align:left;"colspan="5">(Pajak Gaji Pokok + Pajak Lembur)</th>
                <td colspan="1"><?php echo number_format($totalPajak, 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <th style="text-align:center;"colspan="6">Gaji Bersih</th>
            </tr>
            <tr>
                <th style="text-align:left;"colspan="5">(Gaji Kotor - Total Pajak)</th>
                <td colspan="1"><b><?php echo number_format($totalGaji, 2, ',', '.'); ?></b></td>
            </tr>
        </table>
        <p style="text-align:right">Bandung, <?php echo date('d M Y'); ?></p>
        <br>
        <br>
        <br>
        <p style="text-align:right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bendahara</p>
        <p for="" style="text-align:right;"><button id="printPageButton" onclick="window.print()">Print</button></p>
        <p for="" style="text-align:left;"><h2>Number Format, Date, Table, Print(JS)</h2></p>
    </fieldset>
</body>
</html>
