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
    $AlunosController -> InserirAlunos();
} else if ( $op == 2 ) {
    $CidadesController = new CidadesController();
    $CidadesController -> InserirCidades();
} else if ( $op == 3 ) {
    $EstadosController = new EstadosController();
    $EstadosController -> InserirEstados();
} else if( $op == 4 ){
    $AlunosController = new AlunosController();
    $AlunosController -> InserirAlunosValidar($_POST);
} else if( $op == 5 ){
    $CidadesController = new CidadesController();
    $CidadesController -> InserirCidadesValidar($_POST);
}else if( $op == 6 ){
    $EstadosController = new EstadosController();
    $EstadosController -> InserirEstadosValidar($_POST);
}
