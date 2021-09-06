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
        <Legend>Fungsi - Input Biodata</Legend>
        <form action="" method="post">
              <table>
                <tr>
                    <th>Nama Lengkap</th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>
                        <input type="radio" name="jenisKelamin" value="Laki-laki" required> Laki-laki
                        <input type="radio" name="jenisKelamin" value="Perempuan" required> Perempuan
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="tglLahir" required></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>
                        <select name="agama" required id="">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Katholik">Katholik</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>
                        <textarea name="alamat" required id="" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Hobi</th>
                    <td>
                        <input type="checkbox" name="hobi[]" value="Futsal" required> Futsal
                        <input type="checkbox" name="hobi[]" value="Mancing" required> Mancing
                        <input type="checkbox" name="hobi[]" value="Berenang" required> Berenang
                        <input type="checkbox" name="hobi[]" value="Membaca" required> Membaca
                        <input type="checkbox" name="hobi[]" value="Bernyanyi" required> Bernyanyi
                        <input type="checkbox" name="hobi[]" value="Game" required> Game
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Simpan" name="save"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
