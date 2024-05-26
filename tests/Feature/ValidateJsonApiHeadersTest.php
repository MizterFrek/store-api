<?php

use App\Http\Middleware\ValidateJsonApiHeaders;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

test('accept_header_must_be_present_in_all_requests', function () {
    $this->get('test_route')
        ->assertStatus(Response::HTTP_NOT_ACCEPTABLE)
    ;
    
    $this->get('test_route', $this->withAcceptHeader())
        ->assertSuccessful()
    ;
});

test('content_type_header_must_be_present_on_all_post_requests', function () {
    $this->post('test_route', [], $this->withAcceptHeader())
        ->assertStatus(Response::HTTP_UNSUPPORTED_MEDIA_TYPE)
    ;
    
    $this->post('test_route', [], $this->withAcceptAndContentTypeHeaders())
        ->assertSuccessful()
    ;
});

test('content_type_header_must_be_present_on_all_patch_requests', function () {
    $this->patch('test_route', [], $this->withAcceptHeader())
        ->assertStatus(Response::HTTP_UNSUPPORTED_MEDIA_TYPE)
    ;
    
    $this->patch('test_route', [], $this->withAcceptAndContentTypeHeaders())
        ->assertSuccessful()
    ;
});

test('content_type_header_must_be_present_in_responses', function () {
    $this->get('test_route', $this->withAcceptHeader())
        ->assertHeader('Content-Type', config('custom.headers.content-type'))
    ;

    $this->post('test_route', [], $this->withAcceptAndContentTypeHeaders())
        ->assertHeader('Content-Type', config('custom.headers.content-type'))
    ;

    $this->patch('test_route', [], $this->withAcceptAndContentTypeHeaders())
        ->assertHeader('Content-Type', config('custom.headers.content-type'))
    ;

    $this->put('test_route', [], $this->withAcceptAndContentTypeHeaders())
        ->assertHeader('Content-Type', config('custom.headers.content-type'))
    ;
});

test('content_type_header_must_not_be_present_in_empty_responses', function () {

    Route::any('empty_response', fn() => response()->noContent())->middleware(ValidateJsonApiHeaders::class);
    
    $this->getJson('empty_response', $this->withAcceptHeader())
        ->assertHeaderMissing('Content-Type')
    ;

    $this->postJson('empty_response', [], $this->withAcceptAndContentTypeHeaders())
        ->assertHeaderMissing('Content-Type')
    ;

    $this->patchJson('empty_response', [], $this->withAcceptAndContentTypeHeaders())
        ->assertHeaderMissing('Content-Type')
    ;

    $this->deleteJson('empty_response', [], $this->withAcceptAndContentTypeHeaders())
        ->assertHeaderMissing('Content-Type')
    ;
});