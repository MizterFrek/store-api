<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait ApiResponser 
{
    public function result(mixed $data, int $status = Response::HTTP_OK)
    {
        return new JsonResponse(['data' => $data], $status);
    }
}