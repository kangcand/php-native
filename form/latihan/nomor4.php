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
      <legend>Penggajian</legend>
      <form action="nomor4pro.php" method="post">
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
              <label for="">Golongan</label>
            </th>
            <td>
              :<select name="gol" required>
                <option value="">Pilih Golongan</option>
                <option value="1">Golongan 1</option>
                <option value="2">Golongan 2</option>
                <option value="3">Golongan 3</option>
                <option value="4">Golongan 4</option>
              </select>
            </td>
          </tr>
          <tr>
            <th style="text-align:left">
              <label for="">Jumlah Jam Kerja</label>
            </th>
            <td>:<input type="number" name="jam" min="1" required /></td>
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
