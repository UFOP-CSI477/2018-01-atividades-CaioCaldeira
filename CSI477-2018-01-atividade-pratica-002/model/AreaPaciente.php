<?php

namespace Model;

use Model\Database;

class AreaPaciente {
    protected $db = null;

    public function __construct() {
        $this->db = Database::getInstance()->getDB();
    }

    public function EfetuarLogin($email, $password) {
        $sql = "SELECT * FROM users WHERE email = '" . $email . "'  and password = '" . $password . "' ";
        return $this->db->query($sql);
    }

    public function ConferirEmail($email){
        $sql = "SELECT * FROM users WHERE email = '" . $email . "' ";
        return $this->db->query($sql);
    }

    public function EfetuarCadastroPaciente($nome, $email, $senha) {
        $data = date('Y-m-d H:i:s');
        $sql = "INSERT INTO users (name,email,password,type,created_at) VALUES ('" . $nome . "','" . $email . "','" . $senha . "',3,'" . $data . "')";
        $this->db->query($sql);
    }

    public function ListarProcedimentos() {
        $sql = "SELECT * FROM procedures ORDER BY name";
        return $this->db->query($sql);
    }

    public function CadastrarExame($Procedimento, $Data, $id){
        $datacreate = date('Y-m-d H:i:s');
        $sql = "INSERT INTO tests (user_id,procedure_id,date,created_at) VALUES ('" . $id . "','" . $Procedimento . "','" . $Data . "','" . $datacreate . "')";
        $this->db->query($sql);
    }

    public function RetornaIdPaciente($email){
        $sql = "SELECT id FROM users WHERE email = '" . $email . "' ";
        return $this->db->query($sql);
    }

    public function ListarExames($id){
        $sql = "SELECT tests.id, procedures.name, procedures.price, tests.date FROM tests, procedures WHERE tests.user_id = '" . $id . "' and tests.procedure_id = procedures.id  ORDER BY tests.date desc";
        return $this->db->query($sql);
    }

    public function SomarPrecoExames($id){
        $sql = "SELECT SUM(procedures.price) FROM tests, procedures WHERE tests.user_id = '" . $id . "' and tests.procedure_id = procedures.id  ";
        return $this->db->query($sql);
    }

    public function ExcluirExames($id){
        $sql = "DELETE FROM tests WHERE tests.id = '" . $id . "' ";
        $this->db->query($sql);
    }

    public function AlterarExame($id,$Procedimento,$Data){
        $dataupdate = date('Y-m-d H:i:s');
        $sql = "UPDATE tests SET procedure_id = '" . $Procedimento . "', date = '" . $Data . "', updated_at = '" . $dataupdate . "' WHERE id = '" . $id . "' ";
        $this->db->query($sql);
    }
}
