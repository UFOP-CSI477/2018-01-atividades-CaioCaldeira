<?php

namespace Controller;

use Model\Cidade;

class CidadesController {

    public function InserirCidades(){
        $Cidade = new Cidade();
        $lista = $Cidade -> ListarEstados();

        include "./view/cidades/InserirCidades.php";
    }

    public function InserirCidadesValidar($request){
        $nome = $request['nome'];
        $estado = $request['estado'];

        $Cidade = new Cidade();
        $Cidade -> InserirCidade($nome, $estado);

        session_start();
        header("Location: index.php") ;

    }

}
