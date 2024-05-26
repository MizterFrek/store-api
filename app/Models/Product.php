<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    use \App\Traits\HasSorts;

    protected $fillable = [
        'name',
        'description'
    ];

    public $allowedSorts = [
        'name', 
        'description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
