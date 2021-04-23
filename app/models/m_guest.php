<?php

class m_guest {
    protected $db = [];
    public $data = [];
    
    public function __construct() {
        $this->db = new DB();
    }
    
    public function getblog($id) {
       $get_data = $this->db->row("SELECT * FROM tbblog WHERE id=:id",["id" => $id]);
       $this->data["blog"] = $get_data;   
    }
    public function getallblog() {
       $get_data = $this->db->query("SELECT * FROM tbblog ");
       $this->data["blog"] = $get_data;   
    } 

    public function increaseview($id){
       $insert = $this->db->query("UPDATE tbblog  SET view = view + 1 WHERE id = :id", array("id" => $id)); 
    }
}


