@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('mensagem_create'))
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>{{ session('mensagem_create') }}</h4>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white"><strong>INSERIR NOTA</strong></div>

                <div class="card-body table-responsive">
                    <form method="post" action="{{route('nota.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="ano">Ano</label>
                            <input type="text" class="form-control" name="ano"  placeholder="Digite o ano da nota" required>
                        </div>
                        <div class="form-group">
                            <label for="semestre">Semestre</label>
                            <input type="text" class="form-control" name="semestre" placeholder="Digite o semestre da nota" required>
                        </div>
                        <div class="form-group">
                            <label for="aluno_id">Aluno</label>
                            <select class="form-control" name="aluno_id">
                                @foreach($alunos as $e)
                                    <option value={{$e->id}} >Nome do aluno: {{$e->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nota1">Nota 1</label>
                            <input type="text" class="form-control" name="nota1" placeholder="Digite a nota 1 do aluno">
                        </div>
                        <div class="form-group">
                            <label for="nota2">Nota 2</label>
                            <input type="text" class="form-control" name="nota2" placeholder="Digite a nota 2 do aluno">
                        </div>
                        <div class="form-group">
                            <label for="nota3">Nota 3</label>
                            <input type="text" class="form-control" name="nota3" placeholder="Digite a nota 3 do aluno">
                        </div>
                        <div class="form-group">
                            <label for="aprovado">Aprovado</label>
                            <input type="text" class="form-control" name="aprovado" placeholder="Digite 0 ou 1 para aprovação do aluno ou não aprovação, respectivamente">
                        </div>
                        <input type="submit" class="btn btn-success" style="width:250px" value="Inserir"><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
