<?php

namespace Hypatia\Number\Complex\Polar\Formater;

use Garp\Functional AS f;

function format(float $rho, float $phi): string
{
    return f\either(
        f\when(
            $rho > 0, 
            "{$rho}⋅cis({$phi})", 
            ''
        ), 
        '0'
    );
}

const format = '\Hypatia\Number\Complex\Polar\Formater\format';