<?php
class posts extends controls {
    
    public $model = []; 
    
     public function __construct() {
         $this->model = $this->model("post");
     }
     
     public function index($id = ""){
         
         $this->visual('guests/index', [], "enter");
     }
     
     public function login($id = ""){
        $source = $_POST["formsource"];
        $source = functions::getpost($source);
        $username = $source["username"];
        $password = $source["password"];
        $this->model->checklogin($username,$password);
        $feedback  = $this->model->source["login"];
        if ($feedback == "nothing"){
            $json ["operation"] = "nothing";
        }else if ($feedback == "wrongpassword"){
            $json ["operation"] = "wrongpassword";
        }else if ($feedback == "login"){
            $json ["operation"] = "login";
            $_SESSION["signin"] = $this->model->source["signin"];
        }
        echo json_encode($json);
     }
     
     public function addnewblog(){
         
        $source = $_POST["formsource"];
        $source = functions::getpost($source);
        $multiimg = [];
      if (isset($_FILES['files']) && !empty($_FILES['files'])) {
            $no_files = count($_FILES["files"]['name']);
            for ($i = 0; $i < $no_files; $i++) {
                if ($_FILES["files"]["error"][$i] > 0) {
                    echo "Error: " . $_FILES["files"]["error"][$i] . "<br>";
                } else {
                    if (@file_exists('uploads/' . $_FILES["files"]["name"][$i])) {
                        echo 'File already exists : uploads/' . $_FILES["files"]["name"][$i];
                    } else {
                        $extension = explode(".", $_FILES["files"]["name"][$i]);
                        $extension = $extension[(count($extension) - 1)];
                        $singleimg = "blog/" . functions::getid() . "_" . uniqid() . "." . $extension;
                        $newimg = FILEPATH . "app/source/images/" . $singleimg;
                        $multiimg[] = $singleimg;
                        move_uploaded_file($_FILES["files"]["tmp_name"][$i], $newimg);
                    }
                }
            }
        }
        $multiimg = implode(",", $multiimg);
        $this->model->saveblog($source, $mmultiimg);
        $json["operation"] = "successful";
        $json["id"] = $this->model->source["blogid"];
        echo json_encode($json);   
     }
     
     public function updateblog(){
         
        $source = $_POST["formsource"];
        $source = functions::getpost($source);
        $multiimg = [];
      if (isset($_FILES['files']) && !empty($_FILES['files'])) {
            $no_files = count($_FILES["files"]['name']);
            for ($i = 0; $i < $no_files; $i++) {
                if ($_FILES["files"]["error"][$i] > 0) {
                    echo "Error: " . $_FILES["files"]["error"][$i] . "<br>";
                } else {
                    if (@file_exists('uploads/' . $_FILES["files"]["name"][$i])) {
                        echo 'File already exists : uploads/' . $_FILES["files"]["name"][$i];
                    } else {
                        $extension = explode(".", $_FILES["files"]["name"][$i]);
                        $extension = $extension[(count($extension) - 1)];
                        $singleimg = "blog/" . functions::getid() . "_" . uniqid() . "." . $extension;
                        $newimg = FILEPATH . "app/source/images/" . $singleimg;
                        $multiimg[] = $singleimg;
                        move_uploaded_file($_FILES["files"]["tmp_name"][$i], $newimg);
                    }
                }
            }
        }
        $multiimg = implode(",", $multiimg);
        $this->model->blogupdate($source, $mmultiimg);
        $json["operation"] = "successful";
        echo json_encode($json);   
     }
     
}