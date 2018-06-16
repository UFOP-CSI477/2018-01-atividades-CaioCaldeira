<?php

namespace Model;

use Model\Database;

class Aluno {
    protected $db = null;

    public function __construct() {
        $this->db = Database::getInstance()->getDB();
    }

    public function ListarCidades(){
        $sql = "SELECT cidades.nome, cidades.id FROM cidades";
        return $this->db->query($sql);
    }

    public function InserirAluno($nome, $rua, $numero, $bairro, $cidade, $cep, $email){
        $sql = "INSERT INTO alunos (nome,rua,numero,bairro,cidade_id,cep,mail) VALUES ('" . $nome . "','" . $rua . "','" . $numero . "','" . $bairro . "','" . $cidade . "','" . $cep . "','" . $email . "')";
        return $this->db->query($sql);
    }
}
