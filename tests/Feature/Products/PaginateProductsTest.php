<?php

use App\Models\Product;

test('can paginate products', function () {
    
    $products = Product::factory()->times(6)->create();

    $url = route('api.v1.products.index', [
        'page' => [ 'size' => 2, 'number' => 2 ]
    ]);

    $response = $this->getJson($url);
    
    $response->assertSee([ 
        $products[2]->name, 
        $products[3]->name 
    ]);
    
    $response->assertDontSee([
        $products[0]->name,
        $products[1]->name,
        $products[4]->name,
        $products[5]->name
    ]);

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

test('can paginate and sort products', function () {
    
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

    // $firstLink = urldecode($response->json('links.first'));
    // $lastLink = urldecode($response->json('links.last'));
    // $prevLink = urldecode($response->json('links.prev'));
    // $nextLink = urldecode($response->json('links.next'));

    // $this->assertStringContainsString('page[size]=2', $firstLink);
    // $this->assertStringContainsString('page[number]=1', $firstLink);

    // $this->assertStringContainsString('page[size]=2', $lastLink);
    // $this->assertStringContainsString('page[number]=3', $lastLink);

    // $this->assertStringContainsString('page[size]=2', $prevLink);
    // $this->assertStringContainsString('page[number]=1', $prevLink);

    // $this->assertStringContainsString('page[size]=2', $nextLink);
    // $this->assertStringContainsString('page[number]=3', $nextLink);
});