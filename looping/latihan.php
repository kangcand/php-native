<?php
echo "No 1. <br>";
for ($a = 2; $a <= 128; $a *= 2) {
    echo "$a "; // 2 4 8 16 32 64 128
}
echo "<hr>";

echo "No 2. <br>";
for ($b = 3125; $b >= 5; $b /= 5) {
    echo "$b  "; //3125 625 125 25 5
}
echo "<hr>";

echo "No 3. <br>";
$bil = [18, 45, 29, 61, 47, 34];

for ($i = 0; $i < count($bil); $i++) {
    $result[$i] = $bil[$i] % 3; // 0 0 2 1 2 1
    echo "$bil[$i] % 3 = $result[$i] ";
    echo "<hr>";
}

// foreach ($bil as $val) {
//     $hasil = $val % 3;
//     echo "$val % 3 = $hasil";
//     echo "<hr>";
// }

echo "No 4. <br>";
for ($i = 0; $i < 5; $i++) {
    for ($a = 0; $a <= $i; $a++) {
        echo "* ";
    }
    echo "<br>";

}
echo "<br>";
for ($i = 0; $i < 5; $i++) {
    for ($a = 5; $a > $i; $a--) {
        echo "";
    }
    for ($b = 0; $b <= $i; $b++) {
        echo " * ";
    }
    echo "<br>";

}
