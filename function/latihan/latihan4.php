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
        <legend>Perpangkatan</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Masukan Bilangan</th>
                    <td><input type="number" name="bil" id=""></td>
                </tr>
                <tr>
                    <th>Masukan Pangkat</th>
                    <td><input type="number" name="pangkat" id=""></td>
                </tr>
                <tr>
                    <th></th>
                    <td><button type="submit" name="simpan">Simpan</button></td>
                </tr>
            </table>
        </form>
        <?php
if (isset($_POST['simpan'])) {
    $bil = $_POST['bil'];
    $pangkat = $_POST['pangkat'];

    function pangkat($bil, $pangkat)
    {
        if ($pangkat > 1) {
            return $bil * pangkat($bil, $pangkat - 1);
        } else {
            return $bil;
        }

    }

    function pangkatnya($bil, $pangkat)
    {
        for ($i = 1; $i <= $pangkat; $i++) {
            echo $bil;
            if ($i < $pangkat) {
                echo " x ";
            }
        }

    }
    echo "hasil dari perkalian<br>";
    echo pangkatnya($bil, $pangkat);
    $hasil = pangkat($bil, $pangkat);
    echo " = " . $hasil;
}
?>
    </fieldset>
</body>
</html>
