<?php

namespace Tests\Traits;

use Illuminate\Testing\TestResponse;

trait MakesJsonApiRequests
{

    public function withAcceptHeader(): array 
    {
        return ['Accept' => config('custom.headers.accept')];
    }

    public function withAcceptAndContentTypeHeaders(): array
    {
        return [
            'Accept' => config('custom.headers.accept'),
            'Content-Type' => config('custom.headers.content-type')
        ];
    }

    public function json($method, $uri, array $data = [], array $headers = [], $options = 0): TestResponse
    {
        $headers['Accept'] = config('custom.headers.accept');
        return parent::json($method, $uri, $data, $headers, $options);
    }

    public function postJson($uri, array $data = [], array $headers = [], $options = 0): TestResponse
    {
        $headers['Accept'] = config('custom.headers.accept');
        return parent::postJson($uri, $data, $headers);
    }

    public function patchJson($uri, array $data = [], array $headers = [], $options = 0): TestResponse
    {
        $headers['Accept'] = config('custom.headers.accept');
        return parent::postJson($uri, $data, $headers);
    }

    public function putJson($uri, array $data = [], array $headers = [], $options = 0): TestResponse
    {
        $headers['Accept'] = config('custom.headers.accept');
        return parent::postJson($uri, $data, $headers);
    }
}