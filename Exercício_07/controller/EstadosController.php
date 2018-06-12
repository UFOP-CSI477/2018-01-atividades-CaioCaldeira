<?php

namespace Controller;

use Model\Estado;

class EstadosController {

    public function ListarEstados(){
        $Estado = new Estado();
        $lista = $Estado -> ListarEstados();

        include "./view/estados/ListarEstados.php";
    }

}
