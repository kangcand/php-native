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
      <legend>Rental Mobil</legend>
      <form action="verifikasi.php" method="post">
        <table>
          <tr>
            <th style="text-align:left">
                <label for="">Nama</label>
            </th>
            <td>
                :<input type="text" name="nama" required />
            </td>
          </tr>
          <tr>
            <th style="text-align:left">
                <label for="">Nomor Induk Keluarga</label>
            </th>
            <td>
                :<input type="text" name="nik" required />
            </td>
          </tr>
          <tr>
            <th style="text-align:left">
              <label for="">Jenis Kelamin</label>
            </th>
            <td>
              :<input type="radio" name="jk" value="Laki-Laki" required>Laki-laki
              <input type="radio" name="jk" value="Perempuan" required>Perempuan
            </td>
          </tr>
          <tr>
            <th style="text-align:left">
              <label for="">Agama</label>
            </th>
            <td>
              :<select name="agama" required>
                <option value="Islam">Islam</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
                <option value="Kristen">Kristen</option>
              </select>
            </td>
          </tr>
          <tr>
            <th style="text-align:left">
                <label for="">Nama Mobil</label>
            </th>
            <td>
                :<input type="text" name="namaMobil" required />
            </td>
          </tr>
          <tr>
            <th style="text-align:left">
              <label for="">Jenis Mobil</label>
            </th>
            <td>
              :<select name="jenisMobil" required>
                <option value="">Pilih Jenis Mobil</option>
                <option value="Sedan">Sedan</option>
                <option value="SUV">SUV</option>
                <option value="Sport">Sport</option>
                <option value="MPV">MPV</option>
              </select>
            </td>
          </tr>
          <tr>
            <th style="text-align:left">
              <label for="">Merk Mobil</label>
            </th>
            <td>
              :<select name="merkMobil" required>
                <option value="">Pilih Merk Mobil</option>
                <option value="Toyota">Toyota</option>
                <option value="Honda">Honda</option>
                <option value="Mitsubishi">Mitsubishi</option>
                <option value="Mazda">Mazda</option>
              </select>
            </td>
          </tr>
          <tr>
            <th style="text-align:left">
              <label for="">Tanggal Peminjaman</label>
            </th>
            <td>:<input type="date" name="tglPinjam" required /></td>
          </tr>
          <tr>
            <th style="text-align:left">
              <label for="">Tanggal Kembali</label>
            </th>
            <td>:<input type="date" name="tglKembali" required /></td>
          </tr>
          <tr>
            <th style="text-align:left">
              <label for="">Penjamin</label>
            </th>
            <td>
              :<select name="penjamin" required>
                <option value="">Pilih Penjamin</option>
                <option value="Foto Copy KTP">Foto Copy KTP</option>
                <option value="Foto Copy KK">Foto Copy KK</option>
                <option value="Foto Copy SIM">Foto Copy SIM</option>
                <option value="Foto Copy Buku Nikah">Foto Copy Buku Nikah</option>
              </select>
            </td>
          </tr>
          <tr>
            <th style="text-align:left">
              <label for="">Supir</label>
            </th>
            <td>
              :<select name="supir" required>
                <option value="">Pilih Menggunakan Supir</option>
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
              </select>
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
