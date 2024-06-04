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
        $products = Product::applySorts();
        return ProductCollection::make($products->paginate(
            perPage: request('page.size', 15),
            columns: ['*'],
            pageName: 'page[number]',
            page: request('page.number', 1)
        )->appends(request()->only('sort', 'filter', 'page.size')));
    }

    public function show(Product $product)
    {
        return ProductResource::make($product);
    }
}
