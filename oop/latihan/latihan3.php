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
        <legend>OOP Aritmatika</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Bil 1</th>
                    <td><input type="number" name="bil1" required></td>
                </tr>
                <tr>
                    <th>Bil 2</th>
                    <td><input type="number" name="bil2" required></td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="Simpan" name="simpan">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
        <?php
if (isset($_POST['simpan'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

    // mengambil file / class dari aritmatika.php
    require_once 'aritmatika.php';

    // membuat object
    $aritmatika = new Aritmatika($bil1, $bil2);
    ?>
    Hasil Penjumlahan <?php echo $aritmatika->bil1 . " + " . $aritmatika->bil2 . " : " . $aritmatika->penjumlahan(); ?> <br>
    Hasil Pengurangan <?php echo $aritmatika->bil1 . " - " . $aritmatika->bil2 . " : " . $aritmatika->pengurangan(); ?> <br>
    Hasil Perkalian <?php echo $aritmatika->bil1 . " X " . $aritmatika->bil2 . " : " . $aritmatika->perkalian(); ?> <br>
    Hasil Pembagian <?php echo $aritmatika->bil1 . " / " . $aritmatika->bil2 . " : " . $aritmatika->pembagian(); ?> <br>
    Hasil Modulus <?php echo $aritmatika->bil1 . " % " . $aritmatika->bil2 . " : " . $aritmatika->modulus(); ?>
<?php
}
?>
</fieldset>
</body>
</html>
