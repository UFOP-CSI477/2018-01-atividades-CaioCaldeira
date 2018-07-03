<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cidade;
use Illuminate\Support\Facades\DB;
use App\Estado;

class CidadeController extends Controller
{
    public function index()
    {
        $cidades = DB::select('select cidades.* , estados.nome as nomeE from cidades , estados where cidades.estado_id = estados.id order by cidades.nome');
        return view('cidade.index',['cidades' => $cidades]);
    }

    public function create()
    {
        $estados = Estado::orderBy('nome') -> get();
        return view('cidade.create', ['estados' => $estados]);
    }

    public function store(Request $request)
    {
        $cidade = new Cidade();
        $cidade -> nome = $request -> nome;
        $cidade -> estado_id = $request -> estado_id;

        $cidade->save();
        session()->flash('mensagem_create', 'Cidade inserida com sucesso!');
        return redirect()->route('cidade.create');

    }

    public function show($id)
    {
        $cidades = DB::select('select cidades.* , estados.nome as nomeE from cidades , estados where cidades.estado_id = estados.id and cidades.id = ? order by cidades.nome',[$id]);
        return view('cidade.show',['cidades' => $cidades]);
    }

    public function edit($id)
    {
        $cidades = Cidade::find($id);
        $estados = Estado::orderBy('nome') -> get();
        return view('cidade.edit',['cidades' => $cidades , 'estados' => $estados]);
    }

    public function update(Request $request, $id )
    {
        $cidade = Cidade::find($id);
        $cidade -> nome = $request -> nome;
        $cidade -> estado_id = $request -> estado_id;
        $cidade -> save();

        session()->flash('mensagem_edit', 'Cidade atualizada com sucesso!');
        return redirect()->route('cidade.index');
    }

    public function destroy($id)
    {
        $cidade = Cidade::find($id);
        $cidade -> delete();

        session()->flash('mensagem_delete', 'Cidade excluido com sucesso!');
        return redirect()->route('cidade.index');
    }
}
