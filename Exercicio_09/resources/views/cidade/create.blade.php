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
                <div class="card-header bg-primary text-white"><strong>INSERIR CIDADE</strong></div>

                <div class="card-body table-responsive">
                    <form method="post" action="{{route('cidade.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" placeholder="Digite o nome da cidade" required>
                        </div>
                        <div class="form-group">
                            <label for="estado_id">Estado</label>
                            <select class="form-control" name="estado_id">
                                @foreach($estados as $e)
                                    <option value={{$e->id}} >Nome do estado: {{$e->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-success" style="width:250px" value="Inserir"><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
