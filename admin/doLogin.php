<?php
  require("core/init.php");
  $admin = new Admin();
    if(isset($_POST['do_login'])){
      $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
      $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING);
      $isRequired = array("email", "password");
      if(isRequired($isRequired)){
        if($admin->login($email, $password))
        {
          return redirect("/admin/dashboard", "Successfully Logged in", "success");
        }
        else{
          return redirect("/admin", "Could not logged in? Check your credentials", "error");
        }
      }else{
        return redirect("/admin", "Email and Password required", "error");
      }
    }
 