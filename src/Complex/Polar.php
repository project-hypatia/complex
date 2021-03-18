<?php

namespace Hypatia\Number\Complex;


class Polar extends Complex 
{
    protected float $rho = 0;
    protected float $phi = 0;

    public function __get($name): float
    {
        return $this->$name;
    }

    public function __construct(float $rho, float $phi)
    {
        $this->rho = $rho;
        $this->phi = $phi;
    }
}