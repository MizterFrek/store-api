<?php

use App\Models\Product;
use Symfony\Component\HttpFoundation\Response;

test('it can sort products by name asc', function () {
    
    Product::factory()->create(['name' => 'C name']);
    Product::factory()->create(['name' => 'A name']);
    Product::factory()->create(['name' => 'B name']);

    $url = route('products.index', ['sort' => 'name']);
    
    $this->getJson($url)
        ->assertStatus(Response::HTTP_OK)
        ->assertSeeInOrder([ 'A name', 'B name', 'C name' ])
    ;
});

test('it can sort products by name desc', function () {
    
    Product::factory()->create(['name' => 'C name']);
    Product::factory()->create(['name' => 'A name']);
    Product::factory()->create(['name' => 'B name']);

    $url = route('products.index', ['sort' => '-name']);
    $response = $this->getJson($url);

    $response
        ->assertStatus(Response::HTTP_OK)
        ->assertSeeInOrder([ 'C name', 'B name', 'A name' ])
    ;
});

test('it can sort products by name and description', function () {
    
    Product::factory()->create(['name' => 'C name', 'description' => 'B content']);
    Product::factory()->create(['name' => 'A name', 'description' => 'C content']);
    Product::factory()->create(['name' => 'B name', 'description' => 'D content']);

    $url = route('products.index', ['sort' => 'name,-description']);
    $this->getJson($url)
        ->assertStatus(Response::HTTP_OK)
        ->assertSeeInOrder([ 'A name', 'B name', 'C name' ])
    ;

    $url = route('products.index', ['sort' => '-description,name']);
    $this->getJson($url)
        ->assertStatus(Response::HTTP_OK)
        ->assertSeeInOrder([ 'D content', 'C content', 'B content' ])
    ;
});

test('it cannot sort products by unknown fields', function () {
    
    Product::factory()->times(3)->create();

    $url = route('products.index', ['sort' => 'unknown']);
    $this->getJson($url)
        ->assertStatus(Response::HTTP_BAD_REQUEST)
    ;
});
