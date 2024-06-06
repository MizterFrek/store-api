<?php

namespace App\Traits\Models;

use Illuminate\Database\Eloquent\Builder;
use Symfony\Component\HttpFoundation\Response;

trait HasFilters
{
    public function scopeApplyFilters(Builder $query)
    {
        /** @var Model $this */
        abort_unless(
            property_exists($this, 'allowedFilters'),
            Response::HTTP_INTERNAL_SERVER_ERROR, 
            'Please set the public property $allowedFilters inside ' . get_class($this)
        );
        
        return $query->allowedFilters($this->allowedFilters);
    }

    public function scopeYear(Builder $query, int $year)
    {
        $query->whereYear('created_at', $year);
    }

    public function scopeMonth(Builder $query, int $month)
    {
        $query->whereMonth('created_at', $month);
    }
}