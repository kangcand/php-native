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
        <Legend>Fungsi Perhitungan Luas & Keliling Lingkaran</Legend>
        <form action="" method="post">
              <table>
                <tr>
                    <th>Masukan Jari-jari</th>
                    <td><input type="number" name="jari" id=""></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Simpan" name="save" id=""></td>
                </tr>
            </table>
        </form>
        <?php
if (isset($_POST['save'])) {
    $a = $_POST['jari'];

    function luasLingkaran($jari, $phi = 3.14)
    {
        $luas = $phi * $jari * $jari;
        return $luas;
    }

    function kelilingLingkaran($jari, $phi = 3.14)
    {
        $keliling = 2 * ($phi * $jari);
        return $keliling;
    }
    ?>

     Jari jari = <?php echo $a; ?> <br>
     Luas Lingkaran = <?php echo luasLingkaran($a); ?> <br>
     Keliling Lingkaran = <?php echo kelilingLingkaran($a); ?>

<?php }?>
    </fieldset>
</body>
</html>
