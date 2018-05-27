<?php

namespace Model;

use Model\Database;

class AreaAdmin {
    protected $db = null;

    public function __construct() {
        $this->db = Database::getInstance()->getDB();
    }

    public function login($email, $senha){
        $sql = "SELECT * FROM users WHERE email = '" . $email . "'  and password = '" . $senha . "' and (type=1 or type=2)";
        return $this->db->query($sql);
    }

    public function ListarExames(){
        $sql = "SELECT tests.id, users.name as nome, users.email, procedures.name, procedures.price, tests.date FROM tests, procedures, users WHERE tests.procedure_id = procedures.id and users.id = tests.user_id ORDER BY id";
        return $this->db->query($sql);
    }

    public function ListarProcedimentos(){
        $sql = "SELECT id, name, price FROM procedures ORDER BY name";
        return $this->db->query($sql);
    }

    public function ListarProcedimento(){
        $sql = "SELECT procedures.id, procedures.name, procedures.price, users.name AS nome, users.email  FROM procedures, users WHERE procedures.user_id = users.id ORDER BY procedures.id";
        return $this->db->query($sql);
    }

    public function AlterarPreco($id, $Valor){
        $sql = "UPDATE procedures SET price = '" . $Valor . "' WHERE procedures.id = '" . $id . "' ";
        $this->db->query($sql);
    }

    public function CadastrarProcedimento($nome,$preco,$id){
        $data = date('Y-m-d H:i:s');
        $sql = "INSERT INTO procedures (name,price,user_id,created_at) VALUES ('" . $nome . "','" . $preco . "','" . $id . "','" . $data . "')";
        $this->db->query($sql);
    }

    public function BuscaId($email){
        $sql = "SELECT users.id FROM users WHERE users.email = '" . $email . "' ";
        return $this->db->query($sql);
    }

    public function Busca($id){
        $sql = "SELECT * FROM procedures WHERE procedures.id = '" . $id . "' ";
        return $this->db->query($sql);
    }

    public function AtualizarProcedimento($id_Procedimento, $nome, $preco, $id_user){
        $data = date('Y-m-d H:i:s');
        $sql = "UPDATE procedures SET name = '" . $nome . "', price = '" . $preco . "', user_id = '" . $id_user . "', updated_at =  '" . $data . "' WHERE procedures.id = '" . $id_Procedimento . "' ";
        $this->db->query($sql);
    }

    public function DeletarProcedimento($id){
        $sql = "DELETE FROM procedures WHERE procedures.id = '" . $id . "' ";
        $this->db->query($sql);
    }
}
