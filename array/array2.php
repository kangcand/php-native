<?php
$values = array("Ani" => 80, "Otim" => 90, "Ana" => 75,
    "Budi" => 85);
// echo $values['Ani'];
// //80
// echo $values['Otim'];
//90
$values = array();
$values['Ami'] = 80;
$values['Asma'] = 95;
$values['Sri'] = 77;
// echo $values['Asma'];
// echo $values['Ami'];
//95
//80
echo "<br>";
// echo count($values);

foreach ($values as $key => $value) {
    echo "$key : ";
    echo "$value <br>";

}
