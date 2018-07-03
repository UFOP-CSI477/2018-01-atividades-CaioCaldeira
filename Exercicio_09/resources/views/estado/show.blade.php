@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white"><strong>DADOS DO ESTADO</strong></div>

                <div class="card-body table-responsive">
                    <h4><strong>Id: </strong>{{$estados -> id}}</h4>
                    <h4><strong>Nome: </strong>{{$estados -> nome}}</h4>
                    <h4><strong>Sigla: </strong>{{$estados -> sigla}}</h4><br>

                    <a href="{{ route('estado.edit', $estados->id) }}" class="btn btn-success" style="width:200px">Editar</a>
                    <form method="post" onsubmit="return confirm('Confirma exclusão do estado?');" action="{{ route('estado.destroy', ['id' => $estados->id]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Excluir" class="btn btn-danger" style="width:200px">
                    </form>
                    <a href="{{ route('estado.index') }}" class="btn btn-primary" style="width:200px">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
