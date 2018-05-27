<?php

include './model/Database.php';
include './model/AreaGeral.php';
include './controller/AreaGeralController.php';
include './model/AreaPaciente.php';
include './controller/AreaPacienteController.php';
include './model/AreaAdmin.php';
include './controller/AreaAdminController.php';


use Controller\AreaGeralController;
use Controller\AreaPacienteController;
use Controller\AreaAdminController;

$op = $_GET['op'];

if ( $op == 1 ) {
    $AreasGeralController = new AreaGeralController();
    $AreasGeralController -> listar();
} else if ( $op == 2 ) {
    $AreasPacienteController = new AreaPacienteController();
    $AreasPacienteController -> Login();
} else if ( $op == 3 ) {
    $AreasAdminController = new AreaAdminController();
    $AreasAdminController -> Login();
} else if ($op == 4){
    $AreasPacienteController = new AreaPacienteController();
    $AreasPacienteController -> ValidarLogin($_POST);
} else if($op == 5){
    $AreasPacienteController = new AreaPacienteController();
    $AreasPacienteController -> CadastroPaciente();
}else if ($op == 6){
    $AreasPacienteController = new AreaPacienteController();
    $AreasPacienteController -> EfetuarCadastroPaciente($_POST);
}else if($op == 7){
    $AreasPacienteController = new AreaPacienteController();
    $AreasPacienteController -> MenuPaciente();
}else if($op == 8){
    $AreasPacienteController = new AreaPacienteController();
    $AreasPacienteController -> SolicitarExames();
}else if($op == 9){
    $AreasPacienteController = new AreaPacienteController();
    $AreasPacienteController -> ListarExames();
}else if($op == 10){
    $AreasPacienteController = new AreaPacienteController();
    $AreasPacienteController -> Deslogar();
}else if($op == 11){
    $AreasPacienteController = new AreaPacienteController();
    $AreasPacienteController -> CadastrarExame($_POST);
}else if($op == 12){
    $AreasPacienteController = new AreaPacienteController();
    $AreasPacienteController -> AlterarExame();
}else if ($op == 13){
    $AreasPacienteController = new AreaPacienteController();
    $AreasPacienteController -> ExcluirExames();
}else if($op == 14){
    $AreasPacienteController = new AreaPacienteController();
    $AreasPacienteController -> ExcluirExamesValidar($_POST);
}else if ($op == 15){
    $AreasPacienteController = new AreaPacienteController();
    $AreasPacienteController -> AlterarExamesValidar($_POST);
}else if($op == 16){
    $AreasAdminController = new AreaAdminController();
    $AreasAdminController -> ValidarLogin($_POST);
}else if($op == 17){
    $AreasAdminController = new AreaAdminController();
    $AreasAdminController -> AreaAdministrador();
}else if($op == 18){
    $AreasAdminController = new AreaAdminController();
    $AreasAdminController -> AreaOperador();
}else if($op == 19){
    $AreasAdminController = new AreaAdminController();
    $AreasAdminController -> ListarExames();
}else if($op == 20){
    $AreasAdminController = new AreaAdminController();
    $AreasAdminController -> AlterarPreco();
}else if($op == 21){
    $AreasAdminController = new AreaAdminController();
    $AreasAdminController -> AlterarPrecoValidar($_POST);
}else if($op == 22){
    $AreasAdminController = new AreaAdminController();
    $AreasAdminController -> ListarProcedimento();
}else if($op == 23){
    $AreasAdminController = new AreaAdminController();
    $AreasAdminController -> CadastrarProcedimento();
}else if($op == 24){
    $AreasAdminController = new AreaAdminController();
    $AreasAdminController -> AtualizarProcedimento();
}else if($op == 25){
    $AreasAdminController = new AreaAdminController();
    $AreasAdminController -> DeletarProcedimento();
}else if($op == 26){
    $AreasAdminController = new AreaAdminController();
    $AreasAdminController -> CadastrarProcedimentoValidar($_POST);
}else if($op == 27){
    $AreasAdminController = new AreaAdminController();
    $AreasAdminController -> AtualizarProcedimentoValidar($_POST);
}else if($op == 28){
    $AreasAdminController = new AreaAdminController();
    $AreasAdminController -> DeletarProcedimentoValidar($_POST);
}
