<?php

function insertionSort(&$a)
{
    for ($j = 1; $j < count($a); $j++) {
        $i = $j - 1;

        nestedCycle($a, $i, $a[$j]);  // n-1
        // j = 1 => 3
        // j = 2 => 6
        // j = 3 => 9
        // .......
        // j = n => k
        // sum (nestedCycle (j = 2..n))
        $a[$i + 1] = $a[$j];

    }
}

function nestedCycle (&$a, $i, $key) {
    while ($i >= 0 && $a[$i] > $key) { // ????????
        $a[$i + 1] = $a[$i]; // ???
        $i = $i - 1; // ????
    }
}

$example = [5, 23, 1, 3, 10, 50, -2, 0, 'abc'];

insertionSort($example);

echo json_encode($example);

