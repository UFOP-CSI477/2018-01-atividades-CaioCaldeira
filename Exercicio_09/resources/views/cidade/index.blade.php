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
                <div class="card-header bg-primary text-white"><strong>LISTA DE CIDADE</strong></div>

                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Estado</th>
                                <th>Ação</th>
                            </tr>
                            @foreach($cidades as $e)
                                <tr>
                                    <td>{{$e -> id}}</td>
                                    <td>{{$e -> nome}}</td>
                                    <td>{{$e -> nomeE}}</td>
                                    <td><a href="{{route('cidade.show' , ['id' => $e->id])}}" class="btn btn-success btn-sm btn-block">Exibir</a></td>
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
