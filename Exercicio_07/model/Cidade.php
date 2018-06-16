<?php

namespace Model;

use Model\Database;

class Cidade {
    protected $db = null;

    public function __construct() {
        $this->db = Database::getInstance()->getDB();
    }

    public function ListarCidades(){
        $sql = "SELECT cidades.id, cidades.nome, estados.nome as nomeE FROM estados, cidades WHERE cidades.estado_id = estados.id ORDER BY cidades.nome";
        return $this->db->query($sql);
    }
}
