<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Symfony\Component\HttpFoundation\Response;

test('Products Index', function () {
    Product::factory()->times(4)->create();
    $response = $this->get(route('products.index'));

    $response
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonStructure(['data', 'code'])
        ->assertJsonCount(4, 'data')
    ;
});

test('Products Show', function () {
    Product::factory()->times(2)->create();
    $product = Product::factory()->create(['id' => 15]);
    Product::factory()->times(2)->create();

    $response = $this->get(route('products.show', $product->id));
    
    $response
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonStructure(['data', 'code'])
        ->assertJsonFragment([
            'id' => $product->id,
            'name' => $product->name,
            'category_id' => $product->category_id,
            'brand_id' => $product->brand_id,
            'created_at' => $product->created_at,
            'updated_at' => $product->updated_at,
        ])
    ;
});
