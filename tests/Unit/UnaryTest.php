<?php

use function Hypatia\Number\Complex\conjugate;
use Hypatia\Number\Complex\Cartesian\Unary as opc;
use Hypatia\Number\Complex\Polar\Unary as opp;
use Hypatia\Number\Complex\Cartesian;
use Hypatia\Number\Complex\Polar;

test('Cartesian conjugate of Complexe 1+2i should return 1-2i', function(){
    (function($c){
        expect($c)->toHaveProperty('r', 1);
        expect($c)->toHaveProperty('i', -2);
    })(opc\conjugate(new Cartesian(1, 2)));
});

test('Polar conjugate of Complexe rho cis phi should return rho cis -phi', function(){
    (function($c){
        expect($c)->toBeInstanceOf(Polar::class);
        expect($c)->toHaveProperty('rho', 3);
        expect($c)->toHaveProperty('phi', -(pi()/3));
    })(opp\conjugate(new Polar(3, pi()/3)));
})->skip('Not sure about math here, need some check!!!');

test('Conjugate of Complexe 1+2i should return Cartesian form 1-2i', function(){
    (function($c){
        expect($c)->toBeInstanceOf(Cartesian::class);
        expect($c)->toHaveProperty('r', 1);
        expect($c)->toHaveProperty('i', -2);
    })(conjugate(new Cartesian(1, 2)));
});