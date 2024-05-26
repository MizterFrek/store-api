<?php

use App\Http\Middleware\ValidateJsonApiHeaders;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

test('accept_header_must_be_present_in_all_requests', function () {
    $this->get('test_route')->assertStatus(Response::HTTP_NOT_ACCEPTABLE);
    
    $this->get('test_route', [
        'accept' => 'application/vnd.api+json'
    ])->assertSuccessful();

});

test('content_type_header_must_be_present_on_all_post_requests', function () {
    $this->post('test_route', [], [
        'accept' => 'application/vnd.api+json'
    ])->assertStatus(Response::HTTP_UNSUPPORTED_MEDIA_TYPE);
    
    $this->post('test_route', [], [
        'accept' => 'application/vnd.api+json',
        'content-type' => 'application/vnd.api+json'
    ])->assertSuccessful();

});

test('content_type_header_must_be_present_on_all_patch_requests', function () {
    $this->patch('test_route', [], [
        'accept' => 'application/vnd.api+json'
    ])->assertStatus(Response::HTTP_UNSUPPORTED_MEDIA_TYPE);
    
    $this->patch('test_route', [], [
        'accept' => 'application/vnd.api+json',
        'content-type' => 'application/vnd.api+json'
    ])->assertSuccessful();

});

test('content_type_header_must_be_present_in_responses', function () {
    $this->get('test_route', [
        'accept' => 'application/vnd.api+json'
    ])->assertHeader('content-type', 'application/vnd.api+json');

    $this->post('test_route', [], [
        'accept' => 'application/vnd.api+json',
        'content-type' => 'application/vnd.api+json'
    ])->assertHeader('content-type', 'application/vnd.api+json');

    $this->patch('test_route', [], [
        'accept' => 'application/vnd.api+json',
        'content-type' => 'application/vnd.api+json'
    ])->assertHeader('content-type', 'application/vnd.api+json');
});

test('content_type_header_must_not_be_present_in_empty_responses', function () {

    Route::any('empty_response', fn() => response()->noContent())->middleware(ValidateJsonApiHeaders::class);
    
    $this->get('empty_response', [
        'accept' => 'application/vnd.api+json'
    ])->assertHeaderMissing('content-type');

    $this->post('empty_response', [], [
        'accept' => 'application/vnd.api+json',
        'content-type' => 'application/vnd.api+json'
    ])->assertHeaderMissing('content-type');

    $this->patch('empty_response', [], [
        'accept' => 'application/vnd.api+json',
        'content-type' => 'application/vnd.api+json'
    ])->assertHeaderMissing('content-type');

    $this->delete('empty_response', [], [
        'accept' => 'application/vnd.api+json',
        'content-type' => 'application/vnd.api+json'
    ])->assertHeaderMissing('content-type');
});