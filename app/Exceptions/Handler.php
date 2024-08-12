<?php

namespace App\Exceptions;

use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
     */
    public function register(): void
    {
        $this->renderable(function (MethodNotAllowedHttpException $e, Request $request) {
            if($request->is("api/*") || !$request->isMethod('get')){
                return response()->json([
                    'status' => false,
                    'message' => $e->getMessage()
                ],405);
            }
        });

        $this->renderable(function (QueryException $e, Request $request) {
            if ($request->isMethod('post')){
                return response()->json([
                    'status' => false,
                    'message' => "Database Exception !",
                    'error_message' => $e->getMessage()
                ],400);
            }
        });

        $this->renderable(function (HttpException $e, Request $request) {
            if ($request->isMethod('post')){
                return response()->json([
                    'status' => false,
                    'message' => "Http request error !",
                    'error_message' => $e->getMessage()
                ],400);
            }
        });
    }
}
