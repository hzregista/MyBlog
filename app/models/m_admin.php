<?php

class m_admin {
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
    
    public function all_members(){
       $get_data = $this->db->query("SELECT * FROM tbmembers");
       $this->data["members"] = $get_data;        
    }
    public function checklogin($username,$password){
       $get_data = $this->db->query("SELECT * FROM tbcheck WHERE username = :value ", ["value" => $username]);  
       if (empty($get_data))
       {
           $feedback = "nothing";
       }
       else {
          $getpassword =  $get_data[0]["password"];
          if ($password == $getpassword)
          {
              $feedback = "login";
              $this->data["signin"] = ["auth" => $get_data[0]["authority"], "chid"=>$get_data[0]["id"]];
          }else {
              $feedback = "wrongpassword";
          }
       }
       $this->source["login"] = $feedback; 
    }
     public function saveblog($inf,$img){
         $who = functions::getid();
         $date = functions::date("int");
         $get_data = $this->db->query("INSERT INTO tbblog (hood,title,category,status,content,images,who,date) VALUES (:h,:t,:ca,:s,:co,:i,:w,:h)", ["h" => $inf["hood"], "t" => $inf["title"], "ca" => $inf["category"], "s" => $inf["status"], "co" => $inf["content"], "i" => $images, "w" => $who, "d" => $date]);  
         $this->source["blogid"] = $this->db->lastInsertId();
         
     }
     
}


