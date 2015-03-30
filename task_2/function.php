<?php

function sum($ar) {
    $t = 0;
    foreach ($ar as $ele => $val ) {
        if(is_array($val)) {
            $t = sum($val) + $t;
        } else {
            $t = $val + $t;
        }
    }
    return $t;
}

$example = array(1, 2, array(10,20,30), 4);

echo sum($example); // Outputs 67