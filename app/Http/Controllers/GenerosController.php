<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
    public function new(Request $request) {
        return view('genero.new_genero');
    }

    public function signup(Request $request) {
        $request->validate([
            'genero_name' => 'required',
        ]);

        $params = $request->except('_token');
        $genero = Genero::create($params);
        $request->session()->flash('message', "Gênero cadastrado com sucesso: {$genero->genero_name}!!");

        return redirect()->route('genero.list');
    }

    public function list(Request $request) {
        $generos = Genero::all();
        $message = $request -> session()->get('message');

        return view('genero.genero_list', compact('generos', 'message'));
    }

    public function edit($id) {
        $genero = Genero::find($id);

        return view('genero.genero_new', compact('genero'));
    }

    public function alter(Request $request) {
        $request->validate([
            'genero_name' => required,
        ]);

        $params = $request->except('_token');
        $genero = User::find($params['genero_id']);
        $genero->update($params);
        $request->session()->flash('message', "Gênero editado com sucesso: {$genero->genero_name}");

        return redirect()->route('genero.list');
    }

    public function delete(Request $request, $id) {

        $genero = Genero::find($id);
        $genero->delete();
        $request->session() -> flash('message', "Gênero apagado com sucesso: {$genero->genero_name}!!");

        return redirect()->route('genero.list');
    }
}
