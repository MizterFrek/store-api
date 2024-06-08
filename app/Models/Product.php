<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    use \App\Traits\Models\HasSorts;
    use \App\Traits\Models\HasFilters;

    protected $fillable = [
        'name',
        'description'
    ];

    public $allowedSorts = [
        'name', 
        'description'
    ];
    
    public $allowedFilters = [
        'name', 
        'description', 
        'month', 
        'year',
        'categories'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeCategories(Builder $query, $categories)
    {
        $categorySlugs = explode(',', $categories);

        $query->whereHas('category', function($q) use ($categorySlugs) {
            $q->whereIn('slug', $categorySlugs);
        });
    }
}
