<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ValidateJsonApiHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->header('Accept') !== config('custom.headers.accept')) {
            throw new HttpException(Response::HTTP_NOT_ACCEPTABLE, __(Response::$statusTexts[406]));
        }

        if ($request->isMethod('POST') || $request->isMethod('PATCH') || $request->isMethod('PUT')) {
            if ($request->header('Content-type') !== config('custom.headers.content-type')) {
                throw new HttpException(Response::HTTP_UNSUPPORTED_MEDIA_TYPE, __(Response::$statusTexts[415]));
            }
        }
        
        $response = $next($request);

        return $response->isEmpty() 
            ? $response
            : $response->withHeaders([ 'Content-Type' => config('custom.headers.content-type') ]);
    }
}
