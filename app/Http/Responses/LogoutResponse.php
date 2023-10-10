<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Laravel\Fortify\Contracts\LogoutResponse as LogoutResponseContract;

class LogoutResponse implements LogoutResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        // 権限によるルート分岐
        if($user = \Str::of($request->path())->before('/')){
            $route = route($user.'.login');
        }else{
            $route = route('welcome');
        }
        return $request->wantsJson()
                    ? new JsonResponse('', 204)
                    : redirect($route)
                    ->with('status', 'ログアウトしました');
    }
}
