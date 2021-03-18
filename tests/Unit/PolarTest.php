<?php

use Hypatia\Number\Complex\Polar;


test('Instanciate Complexe number as Polar form should success', function(){
    expect(new Polar(2,pi()/3))->toBeInstanceOf(Polar::class);
});

test('Complexe number as Polar form should have rho and phi attributes', function(){
    (function($r){
        expect($r)->toHaveProperty('rho', 2);
        expect($r)->toHaveProperty('phi', pi()/3);
    })(new Polar(2, pi()/3));
});