@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white"><strong>EDITAR CIDADE</strong></div>

                <div class="card-body table-responsive">
                    <form method="post" action="{{route('cidade.update',['id' => $cidades->id])}}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="text" class="form-control" name="id" value="{{$cidades->id}}" disabled required>
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" value="{{$cidades->nome}}" required>
                        </div>
                        <div class="form-group">
                            <label for="estado_id">Estado</label>
                            <select class="form-control" name="estado_id">
                                @foreach($estados as $e)
                                    @if($e->id == $cidades->estado_id)
                                        <option value={{$e->id}} selected>Nome do estado: {{$e->nome}}</option>
                                    @else
                                        <option value={{$e->id}} >Nome do estado: {{$e->nome}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-dark" style="width:200px" value="Atualizar"><br><br>
                        <a href="{{ route('cidade.index') }}" class="btn btn-dark" style="width:200px">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
