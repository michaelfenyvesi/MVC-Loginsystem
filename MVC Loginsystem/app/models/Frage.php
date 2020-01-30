<?php
class Frage {
    private $db;
    
    public function __construct(){
      $this->db = new Database;
    }
    public function getfrage () {
        $this->db->query("SELECT * FROM question WHERE value :value");
        $this->db->bind(':value', $data['value']);
        
        $result = $this->db->resultSet();
        
        return $result;   
    }
}