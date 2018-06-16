<?php

namespace Controller;

use Model\Aluno;

class AlunosController {

    public function InserirAlunos(){
        $Aluno = new Aluno();
        $lista = $Aluno -> ListarCidades();

        include "./view/alunos/InserirAlunos.php";
    }

    public function InserirAlunosValidar($request){
        $nome = $request['nome'];
        $rua = $request['rua'];
        $numero = $request['numero'];
        $bairro = $request['bairro'];
        $cidade = $request['cidade'];
        $cep = $request['cep'];
        $email = $request['email'];

        $Aluno = new Aluno();
        $Aluno -> InserirAluno($nome, $rua, $numero, $bairro, $cidade, $cep, $email);

        session_start();
        header("Location: index.php") ;

    }

}
