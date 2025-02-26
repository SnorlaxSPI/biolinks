<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login()
    {
        //dd(request()->email);
        request()->validate([
            'email' => 'required', 'email',
            'password' => 'required'
        ]);

        if($user = User::query()
        ->where('email', '=', request()->email)
        ->first()) {

        if (hash::check(request()->password, $user->password)) {
        auth()->login($user);

        return to_route('dashboard');
        }
    }

        return back()->with(['message' => 'Não deu certo']);
    }
}
