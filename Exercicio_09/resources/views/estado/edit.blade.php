@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white"><strong>EDITAR ESTADO</strong></div>

                <div class="card-body table-responsive">
                    <form method="post" action="{{route('estado.update',['id' => $estados->id])}}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="text" class="form-control" name="id" value="{{$estados->id}}" disabled required>
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" value="{{$estados->nome}}" required>
                        </div>
                        <div class="form-group">
                            <label for="sigla">Sigla</label>
                            <input type="text" class="form-control" name="sigla" value="{{$estados->sigla}}" required>
                        </div>
                        <input type="submit" class="btn btn-dark" style="width:200px" value="Atualizar"><br><br>
                        <a href="{{ route('estado.index') }}" class="btn btn-dark" style="width:200px">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
