<?php

$x = [0,1,2,3,4,5,6, 7, 8];
$y = [1,1,2,3,5,8,13,21,34];

// f($x) => y;
// myFunc(6) => 13
// myFunc(4) => 5
// myFunc(8) => 34

// 8

$cache = [];
function myFunc($x) {
    global $cache;

    if($x < 2) {
        return 1;
    }

    if(array_key_exists($x, $cache)) {
        return $cache[$x];
    }

    $toReturn = myFunc($x- 1) + myFunc($x -2);
    $cache[$x] = $toReturn;
    return $toReturn;
}

echo myFunc(50);