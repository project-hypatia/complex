<?php

use Hypatia\Number\Complex\Cartesian\Binary;


test('Compute conjugate should success', function($before, $after){
    expect(Binary\compute_conjugate(...$before))->toBe($after);
})->with('conjugates');

test('Compute conjugate should be curried', function(){
    $conj = Binary\compute_conjugate(1);
    $this->assertTrue(is_callable($conj));
    $this->assertEquals([1.0, -2.0], $conj(2));
});

test('Compute conjugate named constant', function(){
    $this->assertTrue(is_callable(Binary\compute_conjugate));
});




test('Compute modulus should success', function($r, $i, $m){
    expect(Binary\compute_modulus($r, $i))->toBe($m);
})->with('modulus');

test('Compute modulus should be curried', function(){
    $mod = Binary\compute_modulus(3);
    $this->assertTrue(is_callable($mod));
    $this->assertEquals(5.0, $mod(-4));
});

test('Compute modulus named constant', function(){
    $this->assertTrue(is_callable(Binary\compute_modulus));
});




test('Compute argument should success', function($r, $i, $a){
    expect(Binary\compute_argument($r, $i))->toBe($a);
})->with('arguments');

test('Compute argument should be curried', function(){
    $arg = Binary\compute_argument(-3);
    $this->assertTrue(is_callable($arg));
    $this->assertEquals(3 * pi() / 4, $arg(3));
});

test('Compute argument named constant', function(){
    $this->assertTrue(is_callable(Binary\compute_argument));
});
