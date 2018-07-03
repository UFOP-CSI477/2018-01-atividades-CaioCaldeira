@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('mensagem_edit'))
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>{{ session('mensagem_edit') }}</h4>
        </div>
    @endif
    @if (session('mensagem_delete'))
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>{{ session('mensagem_delete') }}</h4>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white"><strong>LISTA DE NOTAS</strong></div>

                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>Ano</th>
                                <th>Semestre</th>
                                <th>Aluno</th>
                                <th>Nota 1</th>
                                <th>Nota 2</th>
                                <th>Nota 3</th>
                                <th>Aprovado</th>
                                <th>Opção</th>
                            </tr>
                            @foreach($notas as $e)
                                <tr>
                                    <td>{{$e -> ano}}</td>
                                    <td>{{$e -> semestre}}</td>
                                    <td>{{$e -> nome}}</td>
                                    <td>{{$e -> nota1}}</td>
                                    <td>{{$e -> nota2}}</td>
                                    <td>{{$e -> nota3}}</td>
                                    <td>{{$e -> aprovado}}</td>
                                    <td><a href="{{route('nota.show' , ['id' => $e->aluno_id , 'ano' => $e->ano , 'semestre' => $e->semestre])}}" class="btn btn-success btn-sm btn-block">Exibir</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
