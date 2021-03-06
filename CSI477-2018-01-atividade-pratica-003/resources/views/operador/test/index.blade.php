@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white"><strong>Exames</strong></div>

                <div class="card-body table-responsive">
                    <table class="table table-hover table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nome do Paciente</th>
                                <th>Nome do Procedimento</th>
                                <th>Data</th>
                                <th>Criado em</th>
                                <th>Atualizado em</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tests as $e)
                                <tr>
                                    <td>{{$e -> id}}</td>
                                    <td>{{$e -> nameu}}</td>
                                    <td>{{$e -> namep}}</td>
                                    <td>{{$e -> date}}</td>
                                    <td><?php echo date("d/m/Y H:i:s ",strtotime($e -> created_at)) ?></td>
                                    <td><?php echo date("d/m/Y H:i:s ",strtotime($e -> updated_at)) ?></td>
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
