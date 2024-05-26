<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    use \App\Traits\HasSorts;

    public $allowedSorts = ['name', 'description'];

    protected $fillable = [
        'name',
        'description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
