<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use Illuminate\Support\Facades\DB;
use App\Cidade;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = DB::select('select alunos.* , cidades.nome as nomeC from alunos , cidades where alunos.cidade_id = cidades.id order by alunos.nome');
        return view('aluno.index',['alunos' => $alunos]);
    }

    public function create()
    {
        $cidades = Cidade::orderBy('nome') -> get();
        return view('aluno.create',['cidades' => $cidades]);
    }

    public function store(Request $request)
    {
        $aluno= new Aluno();
        $aluno -> nome = $request -> nome;
        $aluno -> rua = $request -> rua;
        $aluno -> numero = $request -> numero;
        $aluno -> bairro = $request -> bairro;
        $aluno -> cidade_id = $request -> cidade_id;
        $aluno -> cep = $request -> cep;
        $aluno -> mail = $request -> mail;

        $aluno->save();
        session()->flash('mensagem_create', 'Aluno inserido com sucesso!');
        return redirect()->route('aluno.create');

    }

    public function show($id)
    {
        $alunos = DB::select('select alunos.* , cidades.nome as nomeC from alunos , cidades where alunos.cidade_id = cidades.id and alunos.id = ? order by alunos.nome',[$id]);
        return view('aluno.show',['alunos' => $alunos]);
    }

    public function edit($id)
    {
        $alunos = Aluno::find($id);
        $cidades = Cidade::orderBy('nome') -> get();
        return view('aluno.edit',['alunos' => $alunos , 'cidades' => $cidades]);
    }

    public function update(Request $request, $id )
    {
        $aluno = Aluno::find($id);
        $aluno -> nome = $request -> nome;
        $aluno -> rua = $request -> rua;
        $aluno -> numero = $request -> numero;
        $aluno -> bairro = $request -> bairro;
        $aluno -> cidade_id = $request -> cidade_id;
        $aluno -> cep = $request -> cep;
        $aluno -> mail = $request -> mail;
        $aluno -> save();

        session()->flash('mensagem_edit', 'Aluno atualizado com sucesso!');
        return redirect()->route('aluno.index');
    }

    public function destroy($id)
    {
        $aluno = Aluno::find($id);
        $aluno -> delete();

        session()->flash('mensagem_delete', 'Aluno excluido com sucesso!');
        return redirect()->route('aluno.index');
    }
}
