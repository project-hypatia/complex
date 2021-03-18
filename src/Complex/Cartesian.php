<?php

namespace Hypatia\Number\Complex;

use Hypatia\Number\Complex\Polar;

use function Hypatia\Number\Complex\Cartesian\Formater\format;
use function Hypatia\Number\Complex\Cartesian\Converter\to_polar;
use function Hypatia\Number\Complex\Cartesian\Binary\compute_modulus;
use function Hypatia\Number\Complex\Cartesian\Binary\compute_argument;


class Cartesian extends Complex 
{
    protected float $r = 0;
    protected float $i = 0;

    public function __get($name): float
    {
        return $this->$name;
    }

    public function __construct(float $r, float $i)
    {
        $this->r = $r;
        $this->i = $i;
    }

    public function __toString(): string
    {
        return format($this->r, $this->i);
    }

    public function modulus(): float
    {
        return compute_modulus($this->r, $this->i);
    }

    public function argument(): float
    {
        return compute_argument($this->r, $this->i);
    }

    public function toPolar(): Polar
    {
        return new Polar(...to_polar($this->r, $this->i));
    }
}