<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() 
    {
        return ProductCollection::make(Product::all());
    }

    public function show(Product $product)
    {
        return ProductResource::make($product);
    }
}
