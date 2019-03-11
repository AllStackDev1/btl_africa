<?php include 'core/init.php'; ?>
<?php
  $admin = new Admin;
  if($admin->logout()){
    redirect("login", "You Successfully logout", "success");
  }else{
    redirect("");
  }
