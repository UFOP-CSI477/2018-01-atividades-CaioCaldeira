<?php

include './model/Database.php';
include './model/Aluno.php';
include './controller/AlunosController.php';
include './model/Cidade.php';
include './controller/CidadesController.php';
include './model/Estado.php';
include './controller/EstadosController.php';

use Controller\AlunosController;
use Controller\CidadesController;
use Controller\EstadosController;

$op = $_GET['op'];

if ( $op == 1 ) {
    $AlunosController = new AlunosController();
    $AlunosController -> ListarAlunos();
} else if ( $op == 2 ) {
    $CidadesController = new CidadesController();
    $CidadesController -> ListarCidades();
} else if ( $op == 3 ) {
    $EstadosController = new EstadosController();
    $EstadosController -> ListarEstados();
}
