<?php
function redirect($page=FALSE, $message=NULL, $message_type= NULL){
  //checking for page
  if(is_string($page)){
    $location=$page;
  }else{
    $location = $_SERVER['SCRIPT_NAME'];
  }
  //checking for message_
  if($message !=NULL){
    //set  SESSionmessage
   $_SESSION['message'] = $message;
  }
  //checking for $message_type
  if($message_type !=NULL){
    //set  SESSionmessage
   $_SESSION['message_type'] = $message_type ;
  }
  //redirect
  header('Location:'.$location);
  exit;
}

function displayMessage(){
  if(!empty($_SESSION['message'])){
    $message = $_SESSION['message'];
    if(!empty($_SESSION['message_type'])){
      $message_type = $_SESSION['message_type'];
      if($message_type=="error"){
          echo
          "
          <div class='alert alert-danger'>
            <strong>Oh snap!</strong> ".$message.".
          </div>
          ";
      }else{
        echo
        "
          <div class='alert alert-success'>
            <strong>Well done!</strong> ".$message.".
          </div>
        ";
      }
    }
    //unset variables
   unset($_SESSION['message']);
   unset($_SESSION['message_type']);
  }else{
    echo 
    "";
  }
}

function dateFormat($date){
  return date("F j, Y g:ia", strtotime($date));
}


function isRequired($array_fields)
  {
    foreach ($array_fields as $field) {
      if($_POST[".$field."]=''){
        return false;
      }
  }
  return true;
  }

 function passwordMatch($p1, $p2)
  {
    if($p1==$p2){
      return true;
    }else{
      return false;
    }
}

function getActiveRoute($routeToMatch){
  $route = explode("/", $_SERVER['REQUEST_URI']);
  if($routeToMatch === $route[2]){
    return 'active-menu';
  }else{
    return '';
  }
   
}
