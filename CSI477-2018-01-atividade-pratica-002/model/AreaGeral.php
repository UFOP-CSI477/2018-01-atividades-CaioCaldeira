<?php

namespace Model;

use Model\Database;

class AreaGeral {
    protected $db = null;

    public function __construct() {
        $this->db = Database::getInstance()->getDB();
    }

    public function ListarProcedimentos() {
        $sql = "SELECT * FROM procedures ORDER BY name";
        return $this->db->query($sql);
    }

}
