@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white"><strong>DADOS DE NOTAS</strong></div>

                <div class="card-body table-responsive">
                    <h4><strong>Ano: </strong>{{$notas[0] -> ano}}</h4>
                    <h4><strong>Semestre: </strong>{{$notas[0] -> semestre}}</h4>
                    <h4><strong>Aluno: </strong>{{$notas[0] -> nome}}</h4>
                    <h4><strong>Nota 1: </strong>{{$notas[0] -> nota1}}</h4>
                    <h4><strong>Nota 2: </strong>{{$notas[0] -> nota2}}</h4>
                    <h4><strong>Nota 3: </strong>{{$notas[0] -> nota3}}</h4>
                    <h4><strong>Aprovado: </strong>{{$notas[0] -> aprovado}}</h4>

                    <a href="{{ route('nota.edit', ['id' =>$notas[0]->aluno_id , 'ano' => $notas[0]->ano , 'semestre' => $notas[0]->semestre]) }}" class="btn btn-success" style="width:200px">Editar</a>
                    <form method="post" onsubmit="return confirm('Confirma exclusão da nota?');" action="{{ route('nota.destroy', ['id' =>$notas[0]->aluno_id , 'ano' => $notas[0]->ano , 'semestre' => $notas[0]->semestre]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Excluir" class="btn btn-danger" style="width:200px">
                    </form>
                    <a href="{{ route('nota.index') }}" class="btn btn-primary" style="width:200px">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
