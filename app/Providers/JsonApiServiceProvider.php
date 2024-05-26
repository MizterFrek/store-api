<?php

namespace App\Providers;

use App\Mixins\CustomQueryBuilder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;

class JsonApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        /** 
         * @param  string  $name
         * @param  \Closure(array $allowedSorts): (Builder)  $macro
         */
        Builder::mixin(new CustomQueryBuilder());
    }
}
