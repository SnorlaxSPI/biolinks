<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login()
    {
        //dd(request()->email);

        $user = User::query()
        ->where('email', '=', request()->email)
        ->first(); {

        abort_unless($user, 403);

        }
    }
}
