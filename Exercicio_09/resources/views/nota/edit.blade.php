@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white"><strong>EDITAR NOTA</strong></div>

                <div class="card-body table-responsive">
                    <form method="post" action="{{route('nota.update',['id' => $notas[0]->aluno_id , 'ano' => $notas[0]->ano , 'semestre' => $notas[0]->semestre])}}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="ano">Ano</label>
                            <input type="text" class="form-control" name="ano" value="{{$notas[0]->ano}}" disabled required>
                        </div>
                        <div class="form-group">
                            <label for="semestre">Semestre</label>
                            <input type="text" class="form-control" name="semestre" value="{{$notas[0]->semestre}}" disabled required>
                        </div>
                        <div class="form-group">
                            <label for="aluno">Aluno</label>
                            <input type="text" class="form-control" name="aluno" value="{{$notas[0]->nome}}" disabled required>
                        </div>
                        <div class="form-group">
                            <label for="nota1">Nota 1</label>
                            <input type="text" class="form-control" name="nota1" value="{{$notas[0]->nota1}}">
                        </div>
                        <div class="form-group">
                            <label for="nota2">Nota 2</label>
                            <input type="text" class="form-control" name="nota2" value="{{$notas[0]->nota2}}">
                        </div>
                        <div class="form-group">
                            <label for="nota3">Nota 3</label>
                            <input type="text" class="form-control" name="nota3" value="{{$notas[0]->nota3}}">
                        </div>
                        <div class="form-group">
                            <label for="aprovado">Aprovado</label>
                            <input type="text" class="form-control" name="aprovado" value="{{$notas[0]->aprovado}}">
                        </div>
                        <input type="submit" class="btn btn-dark" style="width:200px" value="Atualizar"><br><br>
                        <a href="{{ route('nota.index') }}" class="btn btn-dark" style="width:200px">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
