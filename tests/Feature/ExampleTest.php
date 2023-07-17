<?php

namespace Tests\Feature;

use function Pest\Laravel\get;

it('has welcom page', function () {
    $this->get('/')->assertStatus(200);
    //  get('/')->assertStatus(200);
});
