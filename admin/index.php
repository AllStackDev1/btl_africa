<?php
  require("core/init.php");
  $admin = new Admin();
  if($admin->isLoggedIn() && $_SERVER['REQUEST_URI'] === '/'.$_ENV['ADMIN_PATH'].'/'){
    redirect("/admin/dashboard");
  } else {
      if($_SERVER['REQUEST_URI'] === '/'.$_ENV['ADMIN_PATH'] || $_SERVER['REQUEST_URI'] === '/'.$_ENV['ADMIN_PATH'].'/') {
        include 'login.php';
        return;
      } else {
        $template = new Template("src/pages/route.php");
        echo $template;
        return;
      }
  }