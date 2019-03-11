<?php
  require("core/init.php");
  $admin = new Admin();
  if($admin->isLoggedIn() && $_SERVER['REQUEST_URI'] === '/admin'){
    redirect("admin/dashboard", "Successfully Logged in", "success");
  } else {
    if(isset($_POST['do_login'])){
      $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
      $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING);
      $isRequired = array("email", "password");
      if(isRequired($isRequired)){
        if($admin->login($email, $password))
        {
          redirect("admin/dashboard");
        }
        else{
          redirect("admin", "Could not logged in? Check your credentials", "error");
        }
      }else{
        redirect("admin", "Email and Password required", "error");
      }
    } else {
      if($_SERVER['REQUEST_URI'] === '/admin') {
        include 'login.php';
      } else {
        $template = new Template("src/pages/route.php");
        echo $template;
      }
    }
  }


