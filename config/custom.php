<?php 

/* This file has the custom configurations outside of the Laravel framework for this application */

return [

    'headers' => [
        'accept' => env('ACCEPT_HEADER_APPLICATION', 'application/vnd.api+json'),
        'content-type' => env('CONTENT_TYPE_HEADER_APPLICATION', 'application/vnd.api+json')
    ]
];