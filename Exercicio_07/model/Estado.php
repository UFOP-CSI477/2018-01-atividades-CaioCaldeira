<?php

namespace Model;

use Model\Database;

class Estado {
    protected $db = null;

    public function __construct() {
        $this->db = Database::getInstance()->getDB();
    }

    public function ListarEstados(){
        $sql = "SELECT id, nome ,sigla FROM estados ORDER BY nome";
        return $this->db->query($sql);
    }
}
