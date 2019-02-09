<?php
namespace App\Http\Requests;

use Closure;

class ApiAccessToken 
{
    public function handle($request, Closure $next) 
    {
        if ((string) $request->access_token !== (string) config('v1.query_params.access_token'))
        {
            header('HTTP/1.1 403 Forbidden');
            echo 'Access forbidden.';
            die;
        }

        return $next($request);
    }

}
