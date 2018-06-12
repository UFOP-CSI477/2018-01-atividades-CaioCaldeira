<?php

namespace Controller;

use Model\Aluno;

class AlunosController {

    public function ListarAlunos(){
        $Aluno = new Aluno();
        $lista = $Aluno -> ListarAlunos();

        include "./view/alunos/ListarAlunos.php";
    }

}
