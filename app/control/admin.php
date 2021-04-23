<?php
class admin extends controls {
    
     public $model = []; 
 
     public function __construct() {
         $this->model = $this->model("m_admin");
         $statu = functions::check();
         if (!$statu)
         {
             $this->visual('admin/login', [], "admin");
             exit;
         }
     }
        
        public function index($id = ""){
            $this->visual('admin/index', [], "adminsmenu");
        }
     
        public function logout(){         
            functions::logout();
        }
        
        public function myblogs($value = ""){
            switch ($value)
            {
                case "new":
                $this->visual('admin/blogging/new',[],"adminsmenu");
                break;
                case!"":                    
                $this->model->getblog($value);
                $v = $this->model->data["blog"];
                $this->visual('admin/blogging/update',["bl" => $v],"adminsmenu");
                break;
                default:
                $this->model->getallblog(); 
                $v = $this->model->data["blog"];    
                $this->visual('admin/blogging/manage',["bl" => $v],"adminsmenu");
                break;
            }
            
        }

         public function name($id = ""){
         $model = $this->model("members");
         $model->all_members();
         $members = $model->data["members"];
         $this->visual('members/lists', ["name"=>$members], "enter");
     }
}

