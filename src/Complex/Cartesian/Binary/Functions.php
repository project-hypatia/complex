<?php

namespace Hypatia\Number\Complex\Cartesian\Binary;

use Garp\Functional as f;

function compute_conjugate(float $r, float $i = null)
{
    return f\autocurry(
        fn($r, $i) => [$r, -$i], 
        2
    )(...\func_get_args());
}

function compute_modulus(float $r, float $i = null)
{
    return f\autocurry(
        'hypot',
        2
    )(...\func_get_args());
}

function compute_argument(float $r, float $i = null)
{
    return f\autocurry(
        fn($r, $i) => \atan2($i, $r), 
        2
    )(...\func_get_args());
}

const compute_conjugate = '\Hypatia\Number\Complex\Cartesian\Binary\compute_conjugate';
const compute_modulus   = '\Hypatia\Number\Complex\Cartesian\Binary\compute_modulus';
const compute_argument  = '\Hypatia\Number\Complex\Cartesian\Binary\compute_argument';
