<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Info;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create() {
        return view('users.create_user');
    }

    public function store(Request $request) {
        Users::create([
            'email' => $request->email,
            'senha' => $request->senha,
            'user_name' => $request->user_name,
        ]);

        $users = Users::all();
        return view('users.info_user', ['users' => $users]);
    }

    public function info() {
        $users = Users::all();
        return view('users.info_user', ['users' => $users]);
    }

    public function destroy($id) {
        $user = Users::findOrFail($id);
        $user->delete();
        $users = Users::all();
        return view('users.info_user', ['users'=>$users]);
    }

    public function edit($id) {
        $user = Users::findOrFail($id);
        return view('users.edit_user', ['user' => $user]);
    }

    public function update(Request $request, $id) {
        $user = Users::findOrFail($id);
        $user->update([
            'email' => $request->email,
            'senha' => $request->senha,
            'user_name' => $request->user_name,
        ]);
        $users = Users::all();
        return view('users.info_user', ['users' => $users]);
    }
}
