<?php

use App\Models\Product;

test('can filter products by name', function () {
    
    Product::factory()->create(['name' => 'Product Test']);
    Product::factory()->create(['name' => 'random']);
    
    $url = route('api.v1.products.index', [
        'filter' => [
            'name' => 'test'
        ]
    ]);

    $this->getJson($url)
    ->assertJsonCount(1, 'data')
    ->assertSee('Product Test')
    ->assertDontSee('random');
});

test('can filter products by description', function () {
    
    Product::factory()->create(['description' => 'Product Test']);
    Product::factory()->create(['description' => 'random']);
    
    $url = route('api.v1.products.index', [
        'filter' => [
            'description' => 'test'
        ]
    ]);

    $this->getJson($url)
        ->assertJsonCount(1, 'data')
        ->assertSee('Product Test')
        ->assertDontSee('random')
    ;
});

test('can filter products by year', function () {
    
    Product::factory()->create([
        'name' => 'Product form 2023',
        'created_at' => now()->year(2023),
    ]);
    Product::factory()->create([
        'name' => 'Product form 2024',
        'created_at' => now()->year(2024),
    ]);
    
    $url = route('api.v1.products.index', [
        'filter' => [
            'year' => '2023'
        ]
    ]);

    $this->getJson($url)
        ->assertJsonCount(1, 'data')
        ->assertSee('Product form 2023')
        ->assertDontSee('Product form 2024')
    ;
});

test('can filter products by month', function () {
    
    Product::factory()->create([
        'name' => 'Product form month 3',
        'created_at' => now()->month(3),
    ]);
    Product::factory()->create([
        'name' => 'Product 2 form month 3',
        'created_at' => now()->month(3),
    ]);
    Product::factory()->create([
        'name' => 'Product form month 5',
        'created_at' => now()->month(5),
    ]);
    
    $url = route('api.v1.products.index', [
        'filter' => [
            'month' => '3'
        ]
    ]);

    $this->getJson($url)
        ->assertJsonCount(2, 'data')
        ->assertSee(['Product form month 3', 'Product 2 form month 3'])
        ->assertDontSee('Product form month 5')
    ;
});

test('cannot filter products by unknown filters', function () {
    
    Product::factory()->count(2)->create();
    
    $url = route('api.v1.products.index', [
        'filter' => [
            'unknown' => 'filter'
        ]
    ]);

    $this->getJson($url)->assertStatus(400);
    ;
});
