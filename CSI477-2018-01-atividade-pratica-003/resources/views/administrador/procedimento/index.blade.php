@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('mensagem_store_sucesso'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('mensagem_store_sucesso') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('mensagem_update_sucesso'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('mensagem_update_sucesso') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('mensagem_store_error_vazio'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('mensagem_store_error_vazio') }}</strong><br>
                    Por favor preencha todos os campos para realizar o cadastro.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('mensagem_update_error_vazio'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('mensagem_update_error_vazio') }}</strong><br>
                    Por favor preencha todos os campos para atualizar o cadastro.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('mensagem_store_error_number'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('mensagem_store_error_number') }}</strong><br>
                    Por favor preencha o campo de preço somente com valor numérico.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('mensagem_update_error_number'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('mensagem_update_error_number') }}</strong><br>
                    Por favor preencha o campo de preço somente com valor numérico.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('mensagem_show_error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('mensagem_show_error') }}</strong><br>
                    Por favor insira um id válido para ter acesso a página de exibição.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('mensagem_edit_error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('mensagem_edit_error') }}</strong><br>
                    Por favor insira um id válido para ter acesso a página de edição.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('mensagem_destroy_error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('mensagem_destroy_error') }}</strong><br>
                    Impossível realizar exclusão deste procedimento. Pois este procedimento esta sendo solicitado nos testes.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('mensagem_destroy_sucesso'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('mensagem_destroy_sucesso') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card">
                <div class="card-header bg-dark text-white"><strong>Procedimentos</strong></div>

                <div class="card-body table-responsive">
                    <table class="table table-hover table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Administrador Criador</th>
                                <th>Criado em</th>
                                <th>Atualizado em</th>
                                <th>Visualizar</th>
                                <th>Atualizar</th>
                                <th>Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($procedimentos as $e)
                                <tr>
                                    <td>{{$e -> id}}</td>
                                    <td>{{$e -> name}}</td>
                                    <td>{{$e -> price}}</td>
                                    <td>{{$e -> nameuser}}</td>
                                    <td><?php echo date("d/m/Y H:i:s ",strtotime($e -> created_at)) ?></td>
                                    <td><?php echo date("d/m/Y H:i:s ",strtotime($e -> updated_at)) ?></td>
                                    <td><button type="button" class="btn btn-primary btn-sm btn-block" onclick="window.location='{{ route('procedures.show', [ 'id' => $e -> id]) }}'">Exibir</button></td>
                                    <td><button type="button" class="btn btn-warning btn-sm btn-block" onclick="window.location='{{ route('procedures.edit', [ 'id' => $e -> id]) }}'">Editar</button></td>
                                    <td><form method="post" onsubmit="return confirm('Deseja mesmo excluir este procedimento?');" action="{{ route('procedures.destroy', $e->id) }}">

                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger btn-sm btn-block" type="submit" value="Excluir">

                                        </form>
                                    </td>
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
