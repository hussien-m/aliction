<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Renderer;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */

     protected function unauthenticated($request, AuthenticationException $exception)
     {
         // dd($exception);
         if ($request->expectsJson()) {
             return response()->json(['error' => 'Unauthenticated.'], 401);
         }
         $guard = Arr::get($exception->guards(), 0);
         switch ($guard) {
             case 'admin':
                 $login = 'admin.login';
                 break;
             default:
                 $login = 'login';
                 break;
         }
         //Session::forget('url.intented');
         return redirect()->route($login);
     }
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
