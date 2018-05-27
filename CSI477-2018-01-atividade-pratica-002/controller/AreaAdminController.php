<?php

namespace Controller;

use Model\AreaAdmin;

class AreaAdminController {

    public function Login(){
        include './view/AreaAdmin/Login.php';
    }

    public function AreaOperador(){
        include './view/AreaAdmin/AreaOperador.php';
    }

    public function AreaAdministrador(){
        include './view/AreaAdmin/AreaAdministrador.php';
    }

    public function ValidarLogin($request){
        $email = $request['usuario'];
        $senha = $request['senha'];

        $AreaAdmin = new AreaAdmin();
        $lista = $AreaAdmin -> login($email,$senha);

        session_start();
        if($lista->rowCount() == 1){
            foreach( $lista as $linha ):
                $type = $linha['type'];
            endforeach;
            if($type == 1){
                $_SESSION['autenticadoadmintrue'] = $email;
                header('location: router.php?op=17');
            }else{
                $_SESSION['autenticadooperadortrue'] = $email;
                header('location: router.php?op=18');
            }
        }else{
            $_SESSION['autenticadoadminfalse'] = true;
            header('location: router.php?op=3');
        }

    }

    public function ListarExames(){
        $AreaAdmin = new AreaAdmin();
        $lista = $AreaAdmin -> ListarExames();

        include './view/AreaAdmin/ListaExames.php';
    }

    public function AlterarPreco(){
        $AreaAdmin = new AreaAdmin();
        $lista = $AreaAdmin -> ListarProcedimentos();

        include './view/AreaAdmin/AlterarPreco.php';
    }

    public function AlterarPrecoValidar($request){
        $id = $request['Procedimento'];
        $Valor = $request['Preco'];
        $AreaAdmin = new AreaAdmin();
        $AreaAdmin -> AlterarPreco($id, $Valor);

        session_start();
        $_SESSION['AlterarPreco'] = true;
        header("Location: router.php?op=18") ;

    }

    public function ListarProcedimento(){
        $AreaAdmin = new AreaAdmin();
        $lista = $AreaAdmin -> ListarProcedimento();

        include './view/AreaAdmin/ListarProcedimentos.php';
    }

    public function CadastrarProcedimento(){
        include './view/AreaAdmin/CadastrarProcedimento.php';
    }

    public function CadastrarProcedimentoValidar($request){
        $nome = $request['name'];
        $preco = $request['preco'];

        $AreaAdmin = new AreaAdmin();
        session_start();
        $lista = $AreaAdmin -> BuscaId($_SESSION['autenticadoadmintrue']);
        foreach( $lista as $linha ):
            $lista = $linha['id'];
        endforeach;
        $AreaAdmin -> CadastrarProcedimento($nome,$preco,$lista);
        $_SESSION['CadastroProcedimento'] = true;
        header('location: router.php?op=17');

    }

    public function AtualizarProcedimento(){
        $AreaAdmin = new AreaAdmin();
        $lista = $AreaAdmin -> ListarProcedimentos();
        include './view/AreaAdmin/AtualizarProcedimento.php';
    }

    public function AtualizarProcedimentoValidar($request){
        $id = $request['Procedimento'];
        $nome = $request['Nome'];
        $preco = $request['Preco'];

        $AreaAdmin = new AreaAdmin();
        session_start();
        $lista = $AreaAdmin -> BuscaId($_SESSION['autenticadoadmintrue']);
        foreach( $lista as $linha ):
            $lista = $linha['id'];
        endforeach;
        $AreaAdmin -> AtualizarProcedimento($id, $nome, $preco, $lista);
        $_SESSION['AtualizarProcedimento'] = true;
        header('location: router.php?op=17');

    }

    public function DeletarProcedimento(){
        $AreaAdmin = new AreaAdmin();
        $lista = $AreaAdmin -> ListarProcedimentos();
        include './view/AreaAdmin/DeletarProcedimento.php';
    }

    public function DeletarProcedimentoValidar($request){
        $id = $request['Procedimento'];
        $AreaAdmin = new AreaAdmin();
        $AreaAdmin -> DeletarProcedimento($id);
        session_start();
        $lista = $AreaAdmin -> Busca($id);
        if($lista->rowCount() == 1){
            $_SESSION['DeletarProcedimentoFail'] = true;
            header('location: router.php?op=25');
        }else{
            $_SESSION['DeletarProcedimento'] = true;
            header('location: router.php?op=17');
        }

    }

}
