<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;

class EstadoController extends Controller
{

    public function index()
    {
        $estados = Estado::orderBy('nome')->get();
        return view('estado.index',['estados' => $estados]);
    }

    public function create()
    {
        return view('estado.create');
    }

    public function store(Request $request)
    {
        $estado = new Estado();
        $estado -> nome = $request -> nome;
        $estado -> sigla = $request -> sigla;

        $estado->save();
        session()->flash('mensagem_create', 'Estado inserido com sucesso!');
        return redirect()->route('estado.create');

    }

    public function show($id)
    {
        $estados = Estado::find($id);
        return view('estado.show',['estados' => $estados]);
    }

    public function edit($id)
    {
        $estados = Estado::find($id);
        return view('estado.edit',['estados' => $estados]);
    }

    public function update(Request $request, $id )
    {
        $estado = Estado::find($id);
        $estado -> nome = $request -> nome;
        $estado -> sigla = $request -> sigla;
        $estado -> save();

        session()->flash('mensagem_edit', 'Estado atualizado com sucesso!');
        return redirect()->route('estado.index');
    }

    public function destroy($id)
    {
        $estado = Estado::find($id);
        $estado -> delete();

        session()->flash('mensagem_delete', 'Estado excluido com sucesso!');
        return redirect()->route('estado.index');
    }
}
