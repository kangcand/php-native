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
        <legend>Hitung Bilangan</legend>
        <form action="" method="post">
            <label for="">bilangan 1</label>
            <input type="number" name="bil1" required><br>
            <label for="">bilangan 2</label>
            <input type="number" name="bil2" required>
            <select name="operator" required>
                <option value="">Pilih Operator</option>
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select>
            <br>
            <button type="submit" name="simpan">Simpan</button>
        </form>
    </fieldset>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $a = $_POST['bil1'];
    $b = $_POST['bil2'];
    $operator = $_POST['operator'];
    if ($operator == "tambah") {
        $tambah = $a + $b;
        echo "$a + $b = $tambah<br>";
    } else if ($operator == "kurang") {
        $kurang = $a - $b;
        echo "$a - $b = $kurang<br>";
    } else if ($operator == "kali") {
        $kali = $a * $b;
        echo "$a * $b = $kali<br>";
    } else {
        $bagi = $a / $b;
        echo "$a / $b = $bagi<br>";
    }

}
?>