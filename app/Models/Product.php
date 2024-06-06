<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        'year'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
