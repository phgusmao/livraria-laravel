<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Info;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('login');
    }

    public function signin(Request $request) {
        if(User::where('email', $request->email)->exists() && User::where('senha', $request->senha)->exists()) {
            $user = User::firstWhere('email', $request->email);
            session(['user' => $user->email]);

            return redirect()->route('menu');
        }

        else {
            return redirect()->back()->with('error', "Senha ou e-mail inválidos.");
        }
    }

    public function signout(Request $request) {
        $request ->session()->flush();
        return redirect()->route('login');
    }
}
