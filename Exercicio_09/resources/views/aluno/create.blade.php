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
                <div class="card-header bg-primary text-white"><strong>INSERIR ALUNO</strong></div>

                <div class="card-body table-responsive">
                    <form method="post" action="{{route('aluno.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" placeholder="Digite o nome do aluno" required>
                        </div>
                        <div class="form-group">
                            <label for="rua">Rua</label>
                            <input type="text" class="form-control" name="rua" placeholder="Digite a rua do aluno" required>
                        </div>
                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" name="numero" placeholder="Digite o número do aluno" required>
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" name="bairro" placeholder="Digite o bairro do aluno" required>
                        </div>
                        <div class="form-group">
                            <label for="cidade_id">Cidade</label>
                            <select class="form-control" name="cidade_id">
                                @foreach($cidades as $e)
                                    <option value={{$e->id}} >Nome da cidade: {{$e->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cep">Cep</label>
                            <input type="text" class="form-control" name="cep" placeholder="Digite o cep do aluno" required>
                        </div>
                        <div class="form-group">
                            <label for="mail">E-mail</label>
                            <input type="text" class="form-control" name="mail" placeholder="Digite o e-mail do aluno" required>
                        </div>
                        <input type="submit" class="btn btn-success" style="width:250px" value="Inserir"><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
