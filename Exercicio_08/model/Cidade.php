<?php

namespace Model;

use Model\Database;

class Cidade {
    protected $db = null;

    public function __construct() {
        $this->db = Database::getInstance()->getDB();
    }

    public function ListarEstados(){
        $sql = "SELECT estados.nome, estados.id FROM estados";
        return $this->db->query($sql);
    }

    public function InserirCidade($nome, $estado){
        $sql = "INSERT INTO cidades (nome,estado_id) VALUES ('" . $nome . "','" . $estado . "')";
        return $this->db->query($sql);
    }
}
