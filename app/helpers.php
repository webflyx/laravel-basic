<?php

if (!function_exists('test')) {
    function test()
    {
        return app('test');
    }
}

//test()->config('foo')