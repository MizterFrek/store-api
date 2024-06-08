<?php

use App\Models\Category;
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

test('can filter products by catergory', function () {

    $cat1 = Category::factory()->hasProducts(1)->create(['slug' => 'cat-1']);
    $cat2 = Category::factory()->hasProducts(3)->create(['slug' => 'cat-2']);
    $product = Product::factory()->hasCategory()->create(['name' => 'Producto Test']);
    $cat3 = Category::factory()->hasProducts(4)->create(['id' => 99, 'slug' => 'cat-3']);
    
    $url = route('api.v1.products.index', [
        'filter' => [
            'categories' => 'cat-1,cat-2'
        ]
    ]);

    $this->getJson($url)
        ->assertJsonCount(4, 'data')
        ->assertSee([
            $cat1->products[0]->name, 
            $cat2->products[0]->name, 
            $cat2->products[1]->name, 
            $cat2->products[2]->name
        ])->assertDontSee([
            $cat3->id,
            $product->name,
            $product->category_id,
        ])    
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
