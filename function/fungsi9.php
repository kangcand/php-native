<?php

function faktorial($n)
{
    echo "faktorial({$n}) = faktorial(" . ($n - 1) . ") <br>";
    if ($n > 2) {
        faktorial($n - 1);
    }
}
# panggil
faktorial(5);
