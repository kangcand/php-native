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
        <legend>Bintang</legend>
        <form action="" method="post">
            <label for="">masukan jumlah bintang</label>
            <input type="number" name="bil1" required><br>
            <button type="submit" name="simpan">Simpan</button>
        </form>
    </fieldset>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $bintang = $_POST['bil1'];

    for ($i = 0; $i <= $bintang; $i++) {
        for ($a = $bintang; $a >= $i; $a--) {
            echo "&nbsp;";
        }
        for ($b = 0; $b <= $i; $b++) {
            echo "*";
        }
        echo "<br>";
    }
    for ($i = $bintang; $i >= 0; $i--) {
        for ($a = $bintang; $a >= $i; $a--) {
            echo "&nbsp;";
        }
        for ($b = 0; $b <= $i; $b++) {
            echo "*";
        }
        echo "<br>";
    }

}
?>