<?php

use App\Models\Product;

test('can paginate products', function () {
    
    $products = Product::factory()->count(6)->create();

    $url = route('api.v1.products.index', [
        'page' => [ 'size' => 2, 'number' => 2 ]
    ]);

    $response = $this->getJson($url);
    
    $response->assertSee([ 
        $products[2]->description, 
        $products[3]->description 
    ]);
    
    $response->assertDontSee($products[0]->description);
    $response->assertDontSee($products[1]->description);
    $response->assertDontSee($products[4]->description);
    $response->assertDontSee($products[5]->description);

    $response->assertJsonStructure([
        'links' => ['first', 'last', 'prev', 'next']
    ]);

    $firstLink = urldecode($response->json('links.first'));
    $lastLink = urldecode($response->json('links.last'));
    $prevLink = urldecode($response->json('links.prev'));
    $nextLink = urldecode($response->json('links.next'));

    $this->assertStringContainsString('page[size]=2', $firstLink);
    $this->assertStringContainsString('page[number]=1', $firstLink);

    $this->assertStringContainsString('page[size]=2', $lastLink);
    $this->assertStringContainsString('page[number]=3', $lastLink);

    $this->assertStringContainsString('page[size]=2', $prevLink);
    $this->assertStringContainsString('page[number]=1', $prevLink);

    $this->assertStringContainsString('page[size]=2', $nextLink);
    $this->assertStringContainsString('page[number]=3', $nextLink);
});

test('can paginate sorted products', function () {
    
    Product::factory()->create(['name' => 'C name', 'description' => 'B content']);
    Product::factory()->create(['name' => 'A name', 'description' => 'C content']);
    Product::factory()->create(['name' => 'B name', 'description' => 'D content']);
    
    $url = route('api.v1.products.index', [
        'sort' => 'name',
        'page' => [ 'size' => 1, 'number' => 2 ]
    ]);

    $response = $this->getJson($url);
    
    $response->assertSee([ 
        'B name'
    ]);

    $response->assertDontSee([ 
        'A name',
        'C name'
    ]);

    $firstLink = urldecode($response->json('links.first'));
    $lastLink = urldecode($response->json('links.last'));
    $prevLink = urldecode($response->json('links.prev'));
    $nextLink = urldecode($response->json('links.next'));

    $this->assertStringContainsString('sort=name', $firstLink);
    $this->assertStringContainsString('sort=name', $lastLink);
    $this->assertStringContainsString('sort=name', $prevLink);
    $this->assertStringContainsString('sort=name', $nextLink);
});

test('can paginate filtered products', function () {
    
    Product::factory()->count(3)->create();
    Product::factory()->create(['name' => 'C laravel', 'description' => 'B content']);
    Product::factory()->create(['name' => 'Laravel A', 'description' => 'C content']);
    Product::factory()->create(['name' => 'LARAVEL', 'description' => 'D content']);
    
    $url = route('api.v1.products.index', [
        'filter' => [
            'name' => 'laravel'
        ],
        'page' => [ 
            'size' => 1, 
            'number' => 2 
        ]
    ]);

    $response = $this->getJson($url);

    $firstLink = urldecode($response->json('links.first'));
    $lastLink = urldecode($response->json('links.last'));
    $prevLink = urldecode($response->json('links.prev'));
    $nextLink = urldecode($response->json('links.next'));

    $this->assertStringContainsString('filter[name]=laravel', $firstLink);
    $this->assertStringContainsString('filter[name]=laravel', $lastLink);
    $this->assertStringContainsString('filter[name]=laravel', $prevLink);
    $this->assertStringContainsString('filter[name]=laravel', $nextLink);
});