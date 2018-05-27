<?php

namespace Controller;

use Model\AreaGeral;

class AreaGeralController {

    public function listar() {
        $AreaGeral = new AreaGeral();
        $lista = $AreaGeral -> ListarProcedimentos();
        include './view/AreaGeral/ListaProcedimentos.php';
    }

}
