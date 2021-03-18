<?php

namespace Hypatia\Number\Complex\Polar\Unary;

use Hypatia\Number\Complex\Polar;

function conjugate(Polar $p): Polar
{
    return new Polar($p->rho, -($p->phi));
}

const conjugate = '\Hypatia\Number\Complex\Polar\Unary\conjugate';