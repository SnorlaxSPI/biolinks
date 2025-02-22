<?php

namespace App\Http\Controllers;
class WelcomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }
}

class HelloController extends Controller
{
    public function show()
    {
        return view('hello');
    }
}
