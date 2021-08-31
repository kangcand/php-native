<?php
if (isset($_POST['save'])) {
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
    // echo $nama;

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <fieldset>
      <legend>Verifikasi Pengembalian</legend>
      <form action="rentalpro.php" method="post">
        <input type="hidden" name="nama" value="<?php echo $nama; ?>">
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
        <table>
          <tr>
            <th style="text-align:left">
                <label for="">Tanggal Kembali</label>
            </th>
            <td>
                :<input type="date" name="tglVerifikasi" required />
            </td>
          </tr>
          <tr>
            <th></th>
            <td>
              <button type="submit" name="save">Simpan</button>
              <button type="reset">Reset</button>
            </td>
          </tr>
        </table>
      </form>
    </fieldset>
  </body>
</html>
