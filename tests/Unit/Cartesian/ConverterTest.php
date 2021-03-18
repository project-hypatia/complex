<?php

use Hypatia\Number\Complex\Cartesian\Converter;

test('to_polar should success', function($r, $i, $polar){
    expect(Converter\to_polar($r, $i))->toBe($polar);
})->with([
    [1, 1, [sqrt(2), pi() / 4]],
    [-3, 3, [sqrt(3*3*2), 3 * pi() / 4]]
]);

test('to_polar should be curried', function(){
    $polar = Converter\to_polar(1);
    $this->assertTrue(is_callable($polar));
    $this->assertEquals([sqrt(2), pi() / 4], $polar(1));
});

test('to_polar named constant', function(){
    $this->assertTrue(is_callable(converter\to_polar));
});

