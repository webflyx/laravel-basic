<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('test')) {
    function test()
    {
        return app('test');
    }
}
//test()->config('foo')

if (!function_exists('active_link')) {
    function active_link( string $name, string $class = 'active' ) : string
    {
        return Route::is($name) ? $class : '';
    }
}