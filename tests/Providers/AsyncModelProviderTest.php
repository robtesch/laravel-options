<?php

use Spatie\LaravelOptions\Options;
use Spatie\LaravelOptions\Providers\AsyncModelProvider;

it('can provide null as an async model', function () {
    $options = Options::create(new AsyncModelProvider(null))->toArray();

    expect($options)->toBeArray()->toBe([]);
});
