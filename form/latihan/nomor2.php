<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Pilih Program</center>
    <fieldset>
        <legend>
            Program Bangun ruang
        </legend>

        <form action="nomor2pro.php" method="post">
            Pilih Program
            <br>
            <select name="pilihan" id="" required>
                <option value="1">Luas & Keliling Segitiga</option>
                <option value="2">Luas & Keliling Lingkaran</option>
                <option value="3">Luas & Keliling Persegi</option>
                <option value="4">Luas & Keliling Persegi Panjang</option>
            </select>
            <button type="submit" name="pilih">Pilih</button>
        </form>

    </fieldset>

</body>
</html>
