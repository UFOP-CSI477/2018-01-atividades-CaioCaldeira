<?php

namespace Model;

use Model\Database;

class Estado {
    protected $db = null;

    public function __construct() {
        $this->db = Database::getInstance()->getDB();
    }

    public function InserirEstado($nome, $sigla){
        $sql = "INSERT INTO estados (nome,sigla) VALUES ('" . $nome . "','" . $sigla . "')";
        return $this->db->query($sql);
    }
}
