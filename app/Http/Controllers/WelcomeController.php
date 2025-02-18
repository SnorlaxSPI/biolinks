<?php

namespace App\Http\Controllers;

use App\Models\User;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        //dd(User::factory()->make());
        dd(User::factory()->count(100)->create());

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
