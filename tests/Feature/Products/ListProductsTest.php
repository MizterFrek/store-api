<?php

use App\Models\Product;
use Symfony\Component\HttpFoundation\Response;

test('can fetch single product', function () {

    Product::factory()->times(2)->create();
    $product = Product::factory()->create(['id' => 15]);
    Product::factory()->times(2)->create();

    $this->getJson(route('api.v1.products.show', $product))
        ->assertStatus(Response::HTTP_OK)
        ->assertExactJson([
            'data' => [
                'name' => $product->name,
                'description' => $product->description,
                'category_id' => $product->category_id,
                'brand_id' => $product->brand_id,
            ],
        ])
    ;
});

test('can fetch all products', function () {

    $products = Product::factory()->times(3)->create();
    $response = $this->getJson(route('api.v1.products.index'));

    $response
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonCount(3, 'data')
        ->assertJson([
            'data' => [
                [
                    'name' => $products[0]->name,
                    'description' => $products[0]->description,
                    'category_id' => $products[0]->category_id,
                    'brand_id' => $products[0]->brand_id,
                ],
                [
                    'name' => $products[1]->name,
                    'description' => $products[1]->description,
                    'category_id' => $products[1]->category_id,
                    'brand_id' => $products[1]->brand_id,
                ],
                [
                    'name' => $products[2]->name,
                    'description' => $products[2]->description,
                    'category_id' => $products[2]->category_id,
                    'brand_id' => $products[2]->brand_id,
                ]
            ],
            'links' => [
                'self' => route('api.v1.products.index')
            ],
            'meta' => [
                'products_count' => 3
            ]
        ])
    ;
});
