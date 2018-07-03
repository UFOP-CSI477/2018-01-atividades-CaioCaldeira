@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white"><strong>DADOS DA CIDADE</strong></div>

                <div class="card-body table-responsive">
                    <h4><strong>Id: </strong>{{$cidades[0] -> id}}</h4>
                    <h4><strong>Nome: </strong>{{$cidades[0] -> nome}}</h4>
                    <h4><strong>Estado: </strong>{{$cidades[0] -> nomeE}}</h4><br>

                    <a href="{{ route('cidade.edit', $cidades[0]->id) }}" class="btn btn-success" style="width:200px">Editar</a>
                    <form method="post" onsubmit="return confirm('Confirma exclusão da cidade?');" action="{{ route('cidade.destroy', ['id' => $cidades[0]->id]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Excluir" class="btn btn-danger" style="width:200px">
                    </form>
                    <a href="{{ route('cidade.index') }}" class="btn btn-primary" style="width:200px">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
