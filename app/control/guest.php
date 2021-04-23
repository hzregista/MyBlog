<?php
class guest extends controls {
     public function __construct() {
         $this->model = $this->model("m_guest");
     }
     
     public function index($id = ""){
        $this->model->getallblog(); 
        $v = $this->model->data["blog"];  
        $this->visual('guests/index', ["bl" => $v], "enter");
     }
     public function article($id = ""){
        $this->model->getblog(); 
        $v = $this->model->data["blog"];  
        $this->visual('guests/view', ["bl" => $v], "enter");
     }
     
     public function name($id = ""){
         $model = $this->model("members");
         $model->all_members();
         $members = $model->data["members"];
         $this->visual('members/lists', ["name"=>$members], "enter");
     }
}

