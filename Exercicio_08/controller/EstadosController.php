<?php

namespace Controller;

use Model\Estado;

class EstadosController {

    public function InserirEstados(){
        include "./view/estados/InserirEstados.php";
    }

    public function InserirEstadosValidar($request){
        $nome = $request['nome'];
        $sigla = $request['sigla'];

        $Estado = new Estado();
        $Estado -> InserirEstado($nome, $sigla);

        session_start();
        header("Location: index.php") ;

    }

}
