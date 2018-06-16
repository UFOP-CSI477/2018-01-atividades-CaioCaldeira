<?php

namespace Model;

use Model\Database;

class Aluno {
    protected $db = null;

    public function __construct() {
        $this->db = Database::getInstance()->getDB();
    }

    public function ListarAlunos(){
        $sql = "SELECT alunos.id, alunos.nome, alunos.rua, alunos.numero, alunos.bairro, alunos.cep, alunos.mail, cidades.nome as nomeC FROM alunos, cidades WHERE alunos.cidade_id = cidades.id ORDER BY alunos.nome";
        return $this->db->query($sql);
    }
}
