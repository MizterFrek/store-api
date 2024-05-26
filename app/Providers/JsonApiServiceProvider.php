<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Query\Builder;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

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
        Builder::macro('allowedSorts', function($allowedSorts) {
            /** @var Builder $this */
            if (request()->filled('sort')) {
                $sortFields = explode(',', request()->input('sort'));
                
                foreach($sortFields as $sortField) {
                    $sortDirection = Str::of($sortField)->startsWith('-') ? 'desc' : 'asc';

                    $sortField = ltrim($sortField, '-');
                    
                    abort_unless(
                        in_array($sortField, $allowedSorts), 
                        Response::HTTP_BAD_REQUEST, 
                        "Invalid Query Parameter, {$sortField} is not allowed"
                    );
        
                    $this->orderBy($sortField, $sortDirection);
                }
            }
            return $this;
        });
    }
}
