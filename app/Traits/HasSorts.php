<?php

namespace App\Traits;

use Illuminate\Database\Query\Builder;
use Symfony\Component\HttpFoundation\Response;

trait HasSorts
{
    public function scopeApplySorts(Builder $query)
    {
        /** @var Model $this */
        abort_unless(
            property_exists($this, 'allowedSorts'),
            Response::HTTP_INTERNAL_SERVER_ERROR, 
            'Please set the public property $allowedSorts inside ' . get_class($this)
        );
        
        return $query->allowedSorts($this->allowedSorts);
    }
}