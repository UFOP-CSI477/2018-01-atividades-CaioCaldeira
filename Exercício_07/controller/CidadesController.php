<?php

namespace Controller;

use Model\Cidade;

class CidadesController {

    public function ListarCidades(){
        $Cidade = new Cidade();
        $lista = $Cidade -> ListarCidades();

        include "./view/cidades/ListarCidades.php";
    }

}
