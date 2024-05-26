<?php

namespace App\Traits;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Symfony\Component\HttpFoundation\Response;

trait HasSorts
{
    public function scopeApplySorts(Builder $query, $sort)
    {
        if (! property_exists($this, 'allowedSorts')) {
            abort(Response::HTTP_INTERNAL_SERVER_ERROR, 'Please set the public property $allowedSorts inside '.get_class($this));
        }
        if (is_null($sort)) {
            return;
        }

        $sortFields = \Illuminate\Support\Str::of($sort)->explode(',');

        foreach($sortFields as $sortField) {
            $direction = 'asc';
            if (\Illuminate\Support\Str::of($sortField)->startsWith('-')) {
                $direction = 'desc';
                $sortField = \Illuminate\Support\Str::of($sortField)->substr(1);
            }

            if (! collect($this->allowedSorts)->contains($sortField)) {
                abort(Response::HTTP_BAD_REQUEST, "Invalid Query Parameter, {$sortField} is not allowed");
            }

            $query->orderBy($sortField, $direction);
        }
    }
}