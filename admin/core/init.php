<?php
//start session
session_start();
//make use of the server and database information
require_once("config/index.php");
//make use of helpers
require_once("helpers/index.php");
//autolaoding classes
spl_autoload_register(function ($class_name)
{
  $path = "lib/".$class_name.".php";
  if(file_exists($path))
  {
    require_once($path);
  }
  else
  {
    die("class file does not exits");
  }
});
