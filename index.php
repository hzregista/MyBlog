<?php
setlocale(LC_ALL, 'tr_TR.UTF-8');
session_start();
$name = "http://localhost/MyBlogPHP/";

define("MAIN_DIRECTORY", "$name");
define("HOME", "$name" . "home/");
define("SOURCE", "$name" . "app/source/");
define("TYPE", "$name" . "app/types/");
define("FILES", "$name" . "app/files/");
define("FILEPATH", $_SERVER['DOCUMENT_ROOT'] . "/MyBlogPHP/");
define("JS", time());
require_once 'app/init.php';
$app = new apps;

