<?php

namespace Model;

use PDO;

class Database {

    protected $db = null;

    protected function __construct() {
    }

    public static function getInstance() {
        static $instance = null;
        if ($instance === null) {
            $instance = new static();
        }
        return $instance;
    }

    public function getDB() {
        if ($this->db === null) {
            $db = new PDO('mysql:host=localhost;dbname=analyses', 'sysanalyses', '123456');
        }
        return $db;
    }

}
