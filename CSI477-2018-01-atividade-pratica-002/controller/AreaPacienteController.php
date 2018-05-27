<?php

namespace Controller;

use Model\AreaPaciente;

class AreaPacienteController {

    public function ValidarLogin($request) {
        $email = $request['usuario'];
        $senha = $request['senha'];

        $AreaPaciente = new AreaPaciente();
        $lista = $AreaPaciente -> EfetuarLogin($email, $senha);
        session_start();
        if($lista->rowCount() == 1){
            $_SESSION['autenticadotrue'] = $email;
            header('location: router.php?op=7');
        }else{
            $_SESSION['autenticadofalse'] = true;
            header('location: router.php?op=2');
        }

    }

    public function Login(){
        include './view/AreaPaciente/EfetuarLogin.php';
    }

    public function CadastroPaciente(){
        include './view/AreaPaciente/CadastroPaciente.php';
    }

    public function MenuPaciente(){
        include './view/AreaPaciente/MenuPaciente.php';
    }

    public function Deslogar(){
        session_start();
        unset ($_SESSION['autenticadotrue']);
        header("Location: router.php?op=2");
    }

    public function EfetuarCadastroPaciente($request){
        $nome = $request['nome'];
        $email = $request['email'];
        $senha = $request['senha'];
        $AreaPaciente = new AreaPaciente();
        $lista = $AreaPaciente -> ConferirEmail($email);
        session_start();
        if($lista->rowCount() == 1){
            $_SESSION['cadastropacientefalse'] = true;
            header('location: router.php?op=5');
        }else{
            $AreaPaciente -> EfetuarCadastroPaciente($nome, $email, $senha);
            $_SESSION['cadastropacientetrue'] = true;
            header('location: router.php?op=2');
        }
    }

    public function SolicitarExames(){
        $AreaPaciente = new AreaPaciente();
        $lista = $AreaPaciente -> ListarProcedimentos();
        include './view/AreaPaciente/SolicitarExames.php';

    }

    public function CadastrarExame($request){
        $Procedimento = $request['Procedimento_Id'];
        $Data = $request['Data_Exame'];
        $AreaPaciente = new AreaPaciente();
        session_start();
        $lista = $AreaPaciente -> RetornaIdPaciente($_SESSION['autenticadotrue']);
        foreach( $lista as $linha ):
            $id = $linha['id'];
        endforeach;
        $date = date('Y-m-d H:i:s');
        if($date > $Data){
            $_SESSION['CadastroExameFail'] = true;
            header("Location: router.php?op=8") ;
        }else{
            $AreaPaciente -> CadastrarExame($Procedimento, $Data, $id);
            $_SESSION['CadastroExame'] = true;
            header("Location: router.php?op=7") ;
        }
    }

    public function ListarExames(){
        $AreaPaciente = new AreaPaciente();
        session_start();
        $lista2 = $AreaPaciente -> RetornaIdPaciente($_SESSION['autenticadotrue']);
        foreach( $lista2 as $linha ):
            $id = $linha['id'];
        endforeach;
        $lista = $AreaPaciente -> ListarExames($id);
        $SomaExames = $AreaPaciente -> SomarPrecoExames($id);

        include './view/AreaPaciente/ListaExames.php';
    }

    public function ExcluirExames(){
        $AreaPaciente = new AreaPaciente();
        session_start();
        $lista2 = $AreaPaciente -> RetornaIdPaciente($_SESSION['autenticadotrue']);
        foreach( $lista2 as $linha ):
            $id = $linha['id'];
        endforeach;
        $lista = $AreaPaciente -> ListarExames($id);

        include './view/AreaPaciente/DeletarExame.php';
    }

    public function ExcluirExamesValidar($request){
        $id = $request['Exame'];
        $AreaPaciente = new AreaPaciente();
        $AreaPaciente -> ExcluirExames($id);
        session_start();
        $_SESSION['DeleteExame'] = true;
        header("Location: router.php?op=7") ;
    }

    public function AlterarExame(){
        $AreaPaciente = new AreaPaciente();
        session_start();
        $lista3 = $AreaPaciente -> RetornaIdPaciente($_SESSION['autenticadotrue']);
        foreach( $lista3 as $linha ):
            $id = $linha['id'];
        endforeach;
        $lista = $AreaPaciente -> ListarExames($id);
        $lista2 = $AreaPaciente -> ListarProcedimentos();

        include './view/AreaPaciente/AlterarExame.php';
    }

    public function AlterarExamesValidar($request){
        $id = $request['Exame'];
        $Procedimento = $request['Procedimento'];
        $Data = $request['Data'];
        $AreaPaciente = new AreaPaciente();
        $AreaPaciente -> AlterarExame($id, $Procedimento, $Data);
        session_start();
        $date = date('Y-m-d H:i:s');
        if($date > $Data){
            $_SESSION['AlteraExameFail'] = true;
            header("Location: router.php?op=12") ;
        }else{
            $_SESSION['AlteraExame'] = true;
            header("Location: router.php?op=7") ;
        }

    }

}
