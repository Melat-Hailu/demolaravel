<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use  App\Http\Middleware\AgeCheck;
use  App\Http\Middleware\CheckCountry;
use  App\Http\Middleware\CheckAge2;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        // $middleware->append(AgeCheck::class);
        // $middleware->appendToGroup("check1", [
        //     CheckCountry::class,
        //     CheckAge2::class
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
