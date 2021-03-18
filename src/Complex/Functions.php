<?php

namespace Hypatia\Number\Complex;

use Garp\Functional AS f;
use Hypatia\Number\Complex\Cartesian\Unary as unaryc;
use Hypatia\Number\Complex\Polar\Unary as unaryp;



function conjugate(Complex $r): Complex
{
    return (f\when(
        fn($r) => $r instanceof Cartesian, 
        unaryc\conjugate, 
        unaryp\conjugate
    ))($r);    
}

const conjugate = '\Hypatia\Number\Complex\conjugate';