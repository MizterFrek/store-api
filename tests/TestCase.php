<?php

namespace Tests;

use App\Http\Middleware\ValidateJsonApiHeaders;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Route;

abstract class TestCase extends BaseTestCase
{
    use \Tests\Traits\MakesJsonApiRequests;

    protected function setUp(): void
    {
        parent::setUp();

        /**
         * Ruta para test de ValidateJsonApiHeaders
         */
        Route::any('test_route', fn() => 'OK')->middleware(ValidateJsonApiHeaders::class);
    }
}
