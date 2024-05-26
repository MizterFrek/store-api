<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() 
    {
        
        $sortFields = Str::of(request('sort'))->explode(',');

        $productQuery = Product::query();

        foreach($sortFields as $sortField) {
            $direction = 'asc';
            if (Str::of($sortField)->startsWith('-')) {
                $direction = 'desc';
                $sortField = Str::of($sortField)->substr(1);
            }
            $productQuery->orderBy($sortField, $direction);
        }
        

        return ProductCollection::make($productQuery->get());
    }

    public function show(Product $product)
    {
        return ProductResource::make($product);
    }
}
