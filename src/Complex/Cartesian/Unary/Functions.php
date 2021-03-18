<?php

namespace Hypatia\Number\Complex\Cartesian\Unary;

use Hypatia\Number\Complex\Cartesian;
use function Hypatia\Number\Complex\Cartesian\Binary\compute_conjugate;


function conjugate(Cartesian $c): Cartesian
{
    return new Cartesian(...compute_conjugate($c->r, $c->i));
}


const conjugate = '\Hypatia\Number\Complex\Cartesian\Unary\conjugate';