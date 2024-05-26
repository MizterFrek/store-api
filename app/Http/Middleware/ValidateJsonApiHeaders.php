<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ValidateJsonApiHeaders
{
    const JSON_API_HEADER = 'application/vnd.api+json';
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->header('accept') !== self::JSON_API_HEADER) {
            throw new HttpException(Response::HTTP_NOT_ACCEPTABLE, __(Response::$statusTexts[406]));
        }

        if ($request->isMethod('POST') || $request->isMethod('PATCH')) {
            if ($request->header('content-type') !== self::JSON_API_HEADER) {
                throw new HttpException(Response::HTTP_UNSUPPORTED_MEDIA_TYPE, __(Response::$statusTexts[415]));
            }
        }
        return $next($request)->withHeaders([
            'content-type' => 'application/vnd.api+json'
        ]);
    }
}
