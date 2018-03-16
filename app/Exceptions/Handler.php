<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

use Symfony\Component\HttpFoundation\Response
;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        //handle blacklist token_type
        if ($exception instanceOf TokenBlacklistedException) {
          return response(['error'=>'TOKEN EXPIRED'],Response::HTTP_BAD_REQUEST);
        }
        //handle invalid
        else if($exception instanceOf TokenInvalidException) {
          return response(['error'=>'TOKEN INVALID'],Response::HTTP_BAD_REQUEST);
        }
        // handle general exception
        else if($exception instanceOf JWTException) {
          return response(['error'=>'NO TOKEN'],Response::HTTP_BAD_REQUEST);
        }


        return parent::render($request, $exception);
    }
}
