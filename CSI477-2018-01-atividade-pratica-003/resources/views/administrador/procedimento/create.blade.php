@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><strong>Cadastrar Procedimento</strong></div>

                <div class="card-body">
                    <form method="post" action="{{route('procedures.store')}}">
                        {!! csrf_field ()!!}
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" maxlength="60" class="form-control" name="name" placeholder="Digite o nome do procedimento" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Preço</label>
                            <input type="text" class="form-control" name="price" placeholder="Digite o preço do procedimento" required>
                        </div>
                        <input type="submit" class="btn btn-success pull-right" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
