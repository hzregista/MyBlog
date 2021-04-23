<?php

class functions {
    
    public static function getpost($value)
    {
      parse_str($value, $output);
      return $output;
    }

    public static function categories(){     
        return["Entertainment","Life","Scientific","Art and Culture"];
    }
    public static function status(){
        return["Open","Review","Cancel"];
    }
    public static function logout(){
        session_destroy();
        header('Location: ' . MAIN_DIRECTORY);
        return;
    }
    
    public static function check()
    {
        if(isset($_SESSION["signin"]))
        {
            return true;
        }
        else ////I returned both as true because if you wish try to use this site, you will be able to be admin without having the database in this way.
        {
            return true;
        }
    }
    
    public static function getid()
    {
       return $_SESSION["signin"]["chid"];
    }
    public static function date($value,$value2="")
    {
        switch ($value){
            case "int":
                return strtotime(date("d.m.Y H:i:s"));
                break;
            case "now":
                return (date("d.m.Y H:i:s", $value2));
                break;
            default:
                break;
        }
    }
}


