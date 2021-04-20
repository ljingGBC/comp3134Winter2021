<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $base = basename(__FILE__);
  $path=isset($_GET['q']) ? $_GET['q'] : '.';
  $query = substr($path, strpos($path, "q"));

  if(file_exists($query)){
    if($path != '.'){
      die("Cannot be accessed")
    }else{
      print "<pre>";
      print_r(scandir($path));
      print "</pre>";
    }
  }elseif(!file_exists($query)){
    die("The file or folder does not exist");
  }
?>
