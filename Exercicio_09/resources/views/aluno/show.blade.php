@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white"><strong>DADOS DO ALUNO</strong></div>

                <div class="card-body table-responsive">
                    <h4><strong>Id: </strong>{{$alunos[0] -> id}}</h4>
                    <h4><strong>Nome: </strong>{{$alunos[0] -> nome}}</h4>
                    <h4><strong>Rua: </strong>{{$alunos[0] -> rua}}</h4>
                    <h4><strong>Número: </strong>{{$alunos[0] -> numero}}</h4>
                    <h4><strong>Bairro: </strong>{{$alunos[0] -> bairro}}</h4>
                    <h4><strong>Cidade: </strong>{{$alunos[0] -> nomeC}}</h4>
                    <h4><strong>Cep: </strong>{{$alunos[0] -> cep}}</h4>
                    <h4><strong>E-mail: </strong>{{$alunos[0] -> mail}}</h4><br>

                    <a href="{{ route('aluno.edit', $alunos[0]->id) }}" class="btn btn-success" style="width:200px">Editar</a>
                    <form method="post" onsubmit="return confirm('Confirma exclusão do aluno?');" action="{{ route('aluno.destroy', ['id' => $alunos[0]->id]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Excluir" class="btn btn-danger" style="width:200px">
                    </form>
                    <a href="{{ route('aluno.index') }}" class="btn btn-primary" style="width:200px">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
