<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct() {
        $this->middleware('throttle:5');
    }

    public function __invoke()
    {
        $response = response();
        dd($response);
        return 'test';
    }
}
