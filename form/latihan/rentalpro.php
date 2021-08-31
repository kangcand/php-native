<?php

if (isset($_POST['save'])) {
    // input
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $penjamin = $_POST['penjamin'];
    $namaMobil = $_POST['namaMobil'];
    $jenisMobil = $_POST['jenisMobil'];
    $merkMobil = $_POST['merkMobil'];
    $tglPinjam = $_POST['tglPinjam'];
    $tglKembali = $_POST['tglKembali'];
    $supir = $_POST['supir'];
    $tglVerifikasi = $_POST['tglVerifikasi'];

    // var default
    $denda = 0;
    $harian = 0;
    $hari = 0;
    $biaya = 0;
    $telat = 0;
    $total = 0;
    $dendaHarian = 0;
    $kembali = 0;
    $keterangan = "";

    //proses
    if ($supir == "Ya") {
        $harian = 275000;
    } else {
        $harian = 150000;
    }
    $hari = (strtotime($tglKembali) - strtotime($tglPinjam)) / 60 / 60 / 24;
    $biaya = $hari * $harian;
    $telat = (strtotime($tglVerifikasi) - strtotime($tglKembali)) / 60 / 60 / 24;
    if ($telat > 0) {
        $dendaHarian = 240000;
        $denda = $telat * $dendaHarian;
    } else {
        $denda;
    }

    $total = $biaya + $denda;
}
if (isset($_POST['inputBayar'])) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $penjamin = $_POST['penjamin'];
    $namaMobil = $_POST['namaMobil'];
    $jenisMobil = $_POST['jenisMobil'];
    $merkMobil = $_POST['merkMobil'];
    $tglPinjam = $_POST['tglPinjam'];
    $tglKembali = $_POST['tglKembali'];
    $supir = $_POST['supir'];
    $tglVerifikasi = $_POST['tglVerifikasi'];
    $bayar = $_POST['bayar'];
    $hari = $_POST['hari'];
    $dendaHarian = $_POST['dendaHarian'];
    $denda = $_POST['denda'];
    $biaya = $_POST['biaya'];
    $harian = $_POST['harian'];
    $telat = $_POST['telat'];

    $total = $_POST['total'];

    $kembali = $bayar - $total;

    if ($bayar < $total) {
        $keterangan = "Uang Anda Kurang, nama anda kami blacklist dari rental kami!";
    } else {
        $keterangan = "kembalian anda $kembali, terima kasih sudah memilih rental kami";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman Mobil</title>
    <style>
        @media print {
            #printPageButton {
                display: none;
            }
            .print {
                display:none;
            }

        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Hitung Biaya Peminjaman Mobil</legend>
        <p style="text-align:center;"><img src="https://smkassalaambandung.sch.id/img/logo-custom.png" style="height: 140px" alt="" srcset=""></p>
        <table style="width:100%;" border="1">
            <tr>
                <th colspan="7">Data Diri</th>
            </tr>
            <tr>
                <th>Nama</th>
                <th colspan="3">Nomor Induk Kependudukan</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Penjamin</th>
            </tr>
            <tr>
                <td><?php echo $nama; ?></td>
                <td colspan="3"><?php echo $nik; ?></td>
                <td><?php echo $jk; ?></td>
                <td><?php echo $agama; ?></td>
                <td ><?php echo $penjamin; ?></td>
            </tr>
            <tr>
                <th colspan="7">Data Rental Mobil</th>
            </tr>
            <tr>
                <th>Nama Mobil</th>
                <th>Jenis Mobil</th>
                <th>Merk Mobil</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Tanggal Verifikasi Kembali</th>
                <th>Menggunakan Supir</th>
            </tr>
            <tr>
                <td><?php echo $namaMobil; ?></td>
                <td><?php echo $jenisMobil; ?></td>
                <td><?php echo $merkMobil; ?></td>
                <td><?php echo date("d M Y", strtotime($tglPinjam)); ?></td>
                <td><?php echo date("d M Y", strtotime($tglKembali)); ?></td>
                <td><?php echo date("d M Y", strtotime($tglVerifikasi)); ?></td>
                <td><?php echo $supir; ?></td>
            </tr>
            <tr>
                <th colspan="7">Rincian Biaya</th>
            </tr>
            <tr>
                <th style="text-align:left" colspan="6">Lama Pinjaman</th>
                <td><?php echo $hari; ?> Hari</td>
            </tr>
            <tr>
                <th style="text-align:left" colspan="6">Biaya Harian</th>
                <td>Rp.<?php echo number_format($harian, 0, ',', '.'); ?> </td>
            </tr>
            <tr>
                <th style="text-align:left" colspan="6">Telat Mengembalikan</th>
                <td><?php echo $telat; ?> Hari</td>
            </tr>
            <tr>
                <th style="text-align:left" colspan="6">Denda Harian</th>
                <td>Rp.<?php echo number_format($dendaHarian, 0, ',', '.'); ?> </td>
            </tr>
            <tr>
                <th colspan="7">Total Biaya</th>
            </tr>
            <tr>
                <th style="text-align:left" colspan="6">Total Biaya (Lama Pinjaman * Harian)</th>
                <td>Rp.<?php echo number_format($biaya, 0, ',', '.'); ?> </td>
            </tr>
            <tr>
                <th style="text-align:left" colspan="6">Total Denda (Telat Mengembalikan * Biaya Denda)</th>
                <td>Rp.<?php echo number_format($denda, 0, ',', '.'); ?> </td>
            </tr>
            <tr>
                <th colspan="7">Pembayaran</th>
            </tr>
            <tr>
                <th style="text-align:left" colspan="6">Total Pembayaran (Telat Biaya + Total Denda)</th>
                <td>Rp.<?php echo number_format($total, 0, ',', '.'); ?> </td>
            </tr>
        </table>
        <table>
                <tr>
                    <form method="post" >
                        <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                        <input type="hidden" name="tglVerifikasi" value="<?php echo $tglVerifikasi; ?>">
                        <input type="hidden" name="nik" value="<?php echo $nik; ?>">
                        <input type="hidden" name="jk" value="<?php echo $jk; ?>">
                        <input type="hidden" name="agama" value="<?php echo $agama; ?>">
                        <input type="hidden" name="penjamin" value="<?php echo $penjamin; ?>">
                        <input type="hidden" name="namaMobil" value="<?php echo $namaMobil; ?>">
                        <input type="hidden" name="jenisMobil" value="<?php echo $jenisMobil; ?>">
                        <input type="hidden" name="merkMobil" value="<?php echo $merkMobil; ?>">
                        <input type="hidden" name="tglPinjam" value="<?php echo $tglPinjam; ?>">
                        <input type="hidden" name="tglKembali" value="<?php echo $tglKembali; ?>">
                        <input type="hidden" name="supir" value="<?php echo $supir; ?>">
                        <input type="hidden" name="denda" value="<?php echo $denda; ?>">
                        <input type="hidden" name="hari" value="<?php echo $hari; ?>">
                        <input type="hidden" name="harian" value="<?php echo $harian; ?>">
                        <input type="hidden" name="total" value="<?php echo $total; ?>">
                        <input type="hidden" name="telat" value="<?php echo $telat; ?>">
                        <input type="hidden" name="dendaHarian" value="<?php echo $dendaHarian; ?>">
                        <input type="hidden" name="biaya" value="<?php echo $biaya; ?>">
                        <th class="print">Masukan Uang Pembayaran</th>
                        <td class="print">:<input type="text" class="print" name="bayar"></td>
                        <td><input type="submit" class="print" name="inputBayar" value="Bayar"></td>
                    </form>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td>:<?php echo $keterangan; ?></td>
                </tr>
            </table>
        <p style="text-align:right">Bandung, <?php echo date("d M Y", strtotime($tglVerifikasi)); ?></p>
        <br>
        <br>
        <br>
        <p style="text-align:right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bendahara</p>
        <p for="" style="text-align:right;"><button id="printPageButton" onclick="window.print()">Print</button></p>
    </fieldset>
</body>
</html>

