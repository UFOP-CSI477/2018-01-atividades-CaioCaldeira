<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Nota;
use App\Aluno;

class NotaController extends Controller
{
    public function index()
    {
        $notas = DB::select('select notas.* , alunos.nome from alunos , notas where notas.aluno_id = alunos.id order by notas.ano');
        return view('nota.index',['notas' => $notas]);
    }

    public function create()
    {
        $alunos = Aluno::orderBy('nome') -> get();
        return view('nota.create',['alunos' => $alunos]);
    }

    public function store(Request $request)
    {
        $nota = new Nota();
        $nota -> ano = $request -> ano;
        $nota -> semestre = $request -> semestre;
        $nota -> aluno_id = $request -> aluno_id;
        $nota -> nota1 = $request -> nota1;
        $nota -> nota2 = $request -> nota2;
        $nota -> nota3 = $request -> nota3;
        $nota -> aprovado = $request -> aprovado;

        $nota->save();
        session()->flash('mensagem_create', 'Nota inserida com sucesso!');
        return redirect()->route('nota.create');

    }

    public function show($id , $ano , $semestre)
    {
        $notas = DB::select('select notas.* , alunos.nome from alunos , notas where notas.aluno_id = alunos.id and notas.ano = ? and notas.semestre = ? and notas.aluno_id = ? order by notas.ano',[$ano,$semestre,$id]);
        return view('nota.show',['notas' => $notas]);
    }

    public function edit($id , $ano , $semestre)
    {
        $notas = DB::select('select notas.* , alunos.nome from alunos , notas where notas.aluno_id = alunos.id  and notas.ano = ? and notas.semestre = ? and notas.aluno_id = ? order by notas.ano',[$ano,$semestre,$id]);
        return view('nota.edit',['notas' => $notas]);
    }

    public function update(Request $request, $id , $ano , $semestre )
    {
        DB::table('notas')
            ->where('aluno_id', $id)
            ->where('ano', $ano)
            ->where('semestre', $semestre)
            ->update(['nota1' => $request->nota1 , 'nota2' => $request->nota2 , 'nota3' => $request->nota3 , 'aprovado' => $request->aprovado]);

        session()->flash('mensagem_edit', 'Nota atualizada com sucesso!');
        return redirect()->route('nota.index');
    }

    public function destroy($id , $ano , $semestre)
    {
        DB::table('notas')->where('ano', $ano)->where('semestre', $semestre)->where('aluno_id', $id)->delete();

        session()->flash('mensagem_delete', 'Nota excluido com sucesso!');
        return redirect()->route('nota.index');
    }
}
