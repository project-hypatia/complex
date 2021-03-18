<?php

namespace Hypatia\Number\Complex\Cartesian\Converter;

use Garp\Functional as f;
use function Hypatia\Number\Complex\Cartesian\Binary\compute_modulus;
use function Hypatia\Number\Complex\Cartesian\Binary\compute_argument;


function to_polar(float $r, float $i = null)
{
    return f\autocurry(
        fn($r, $i) => [compute_modulus($r, $i), compute_argument($r, $i)],
        2
    )(...\func_get_args());
}


const to_polar = '\Hypatia\Number\Complex\Cartesian\Converter\to_polar';
