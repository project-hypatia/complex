<?php

use Hypatia\Number\Complex\Cartesian\Formater as cformater;
use Hypatia\Number\Complex\Polar\Formater as pformater;


test('Pool Cartesian formater call should success', function($r, $i, $str){
    expect(cformater\format($r, $i))->toBe($str);
})->with('cartesians');

test('Pool Polar formater call should success', function($r, $t, $str){
    expect(pformater\format($r, $t))->toBe($str);
})->with('polars');