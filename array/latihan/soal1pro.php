<?php
if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $asalSekolah = $_POST['asalSekolah'];
    $indo = $_POST['indo'];
    $inggris = $_POST['inggris'];
    $mtk = $_POST['mtk'];
    $ipa = $_POST['ipa'];
    $totalNilai = 0;
    $rata = 0;

    $keterangan = "";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Siswa</legend>
        <table border=1>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Asal Sekolah</th>
                <th>Bahasa Indonesia</th>
                <th>Bahasa Inggris</th>
                <th>Matematika</th>
                <th>Ilmu Pengetahuan Alam</th>
                <th>Jumlah Nilai</th>
                <th>Rata-rata</th>
                <th>Keterangan</th>
            </tr>

            <?php
$no = 1;
for ($i = 0; $i < count($nama); $i++) {?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $nama[$i]; ?></td>
                <td><?php echo $asalSekolah[$i]; ?></td>
                <td><?php echo $indo[$i]; ?></td>
                <td><?php echo $inggris[$i]; ?></td>
                <td><?php echo $mtk[$i]; ?></td>
                <td><?php echo $ipa[$i]; ?></td>
                <?php $totalNilai = $indo[$i] + $inggris[$i] + $mtk[$i] + $ipa[$i];
    $rata = ($indo[$i] + $inggris[$i] + $mtk[$i] + $ipa[$i]) / 4;

    if ($totalNilai > 340) {
        $keterangan = "Diterima";
    } else {
        $keterangan = "Tidak Diterima";
    }
    ?>
                <td><?php echo $totalNilai; ?></td>
                 <td><?php echo $rata; ?></td>
                <td><?php echo $keterangan; ?></td>
            </tr>
            <?php /latihan/array-multi.php}?>
        </table>
    </fieldset>
</body>
</html>