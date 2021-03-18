<?php

use Hypatia\Number\Complex\Cartesian;
use Hypatia\Number\Complex\Polar;
use Hypatia\Number\Complex\Cartesian\Unary;
use Hypatia\Number\Complex\Cartesian\Formater;
use Hypatia\Number\Complex\Cartesian\Converter;






test('Pool argument method call should success', function($r, $i, $a){
    expect((new Cartesian($r, $i))->argument())->toBe($a);
})->with('arguments');



test('Instanciate Complexe number as Cartesian form should success', function(){
    expect(new Cartesian(1,2))->toBeInstanceOf(Cartesian::class);
});

test('Complexe number as Cartesian form should have r and i attributes', function(){
    (function($r){
        expect($r)->toHaveProperty('r', 1);
        expect($r)->toHaveProperty('i', 3);
    })(new Cartesian(1,3));
});

test('Pool toString call should success', function($r, $i, $str){
    expect((string)(new Cartesian($r, $i)))->toBe($str);
})->with('cartesians');