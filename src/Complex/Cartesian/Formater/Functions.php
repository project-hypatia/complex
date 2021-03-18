<?php

namespace Hypatia\Number\Complex\Cartesian\Formater;

use Garp\Functional AS f;

function format(float $r, float $i): string
{
    return f\either(
        trim(
            f\concat(
                $r == 0 ? '0' : $r, // Re
                $i < 0 ? '-' : '+', // Sign
                f\when(             // Im
                    $i != 0,
                    (fn($im) => $im != 1 ? $im.'i' : 'i')(\abs($i)),
                    ''
                )
            ), 
            '+0'
        ), 
        '0'
    );
}

const format = '\Hypatia\Number\Complex\Cartesian\Formater\format';