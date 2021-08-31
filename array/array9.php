<?php
$transport = array('jetpack','boat','foot', 'bike', 'car', 'plane');
echo "<pre>";
print_r($transport);
echo "</pre>";
$mode = current($transport);
echo $mode . "<br>";
//jetpack //jetpack
$mode = next($transport); 
echo $mode . "<br>";
// boat //boat
$mode = current($transport);
echo $mode . "<br>";
// foot //boat //boat
$mode = prev($transport);
echo $mode . "<br>";
// bike //jetpack //jetpack
$mode = end($transport);
echo $mode . "<br>";
// car //plane //plane
$mode = current($transport);
echo $mode . "<br>";
// plane //jetpack //plane
$mode = reset($transport);
echo $mode . "<br>";