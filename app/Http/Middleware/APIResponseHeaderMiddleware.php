<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Illuminate\Contracts\Routing\ResponseFactory;

class APIResponseHeaderMiddleware implements Middleware {

    /**
    * Handle an incoming request.
    *
    * @param \Illuminate\Http\Request $request
    * @param \Closure $next
    * @return mixed
    */
    public function handle($request, Closure $next)
    { 
    // ALLOW OPTIONS METHOD
        $headers = [
        'Access-Control-Allow-Origin' => '*',
        'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
        'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin'
        ];

        $response = $next($request);
        foreach($headers as $key => $value) 
            $response->header($key, $value);
        return $response;
    }

}