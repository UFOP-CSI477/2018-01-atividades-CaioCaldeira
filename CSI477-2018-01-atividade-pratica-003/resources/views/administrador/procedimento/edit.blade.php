@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><strong>Editar Procedimento</strong></div>

                <div class="card-body">
                    <form method="post" action="{{route('procedures.update' , [$procedimento -> id])}}">
                        {!! csrf_field ()!!}
                        @method('PATCH')
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="text" maxlength="60" class="form-control" name="id" value="{{$procedimento -> id}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" maxlength="60" class="form-control" name="name" value="{{$procedimento -> name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Preço</label>
                            <input type="text" class="form-control" name="price" value="{{$procedimento -> price}}" required>
                        </div>
                        <input type="submit" class="btn btn-success pull-right" value="Editar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
