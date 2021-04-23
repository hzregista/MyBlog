<?php

class controls{
    
    public function model($model){
        require_once 'app/models/' . $model . '.php';
        return new $model();
    }
    
    public function visual($image, $data = [], $page = "main")
    {
        if ($page == "main"){
            require_once 'app/types/constants/top.php';
            require_once 'app/types/constants/topmenu.php';
            require_once 'app/types/' . $image . '.php';
            require_once 'app/types/constants/top.php';            
        }
        else if ($page == "enter")
        {
            require_once 'app/types/constants/top.php';
            require_once 'app/types/' . $image . '.php';
            require_once 'app/types/constants/bottom.php';            
        }
        else if ($page == "admin")
        {
            require_once 'app/types/constants/adminpaneltop.php';
            require_once 'app/types/' . $image . '.php';
            require_once 'app/types/constants/adminpanelbottom.php';            
        }
        else if ($page == "adminsmenu")
        {
            require_once 'app/types/constants/adminpaneltop.php';
            require_once 'app/types/constants/adminmenutop.php';
            require_once 'app/types/' . $image . '.php';
            require_once 'app/types/constants/adminmenubottom.php';
            require_once 'app/types/constants/adminpanelbottom.php';            
        }
        else if ($page == "single"){
            require_once 'app/types/' . $image . '.php';
        }
    }
    
}
