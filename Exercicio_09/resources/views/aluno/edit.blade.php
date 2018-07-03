@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white"><strong>EDITAR ALUNO</strong></div>

                <div class="card-body table-responsive">
                    <form method="post" action="{{route('aluno.update',['id' => $alunos->id])}}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="text" class="form-control" name="id" value="{{$alunos->id}}" disabled required>
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" value="{{$alunos->nome}}" required>
                        </div>
                        <div class="form-group">
                            <label for="rua">Rua</label>
                            <input type="text" class="form-control" name="rua" value="{{$alunos->rua}}" required>
                        </div>
                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" name="numero" value="{{$alunos->numero}}" required>
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" name="bairro" value="{{$alunos->bairro}}" required>
                        </div>
                        <div class="form-group">
                            <label for="cidade_id">Cidade</label>
                            <select class="form-control" name="cidade_id">
                                @foreach($cidades as $e)
                                    @if($e->id == $alunos->cidade_id)
                                        <option value={{$e->id}} selected>Nome da cidade: {{$e->nome}}</option>
                                    @else
                                        <option value={{$e->id}} >Nome da cidade: {{$e->nome}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cep">Cep</label>
                            <input type="text" class="form-control" name="cep" value="{{$alunos->cep}}" required>
                        </div>
                        <div class="form-group">
                            <label for="mail">E-mail</label>
                            <input type="text" class="form-control" name="mail" value="{{$alunos->mail}}" required>
                        </div>
                        <input type="submit" class="btn btn-dark" style="width:200px" value="Atualizar"><br><br>
                        <a href="{{ route('aluno.index') }}" class="btn btn-dark" style="width:200px">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
