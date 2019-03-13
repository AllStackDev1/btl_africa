<?php
 $admin = new Admin();
if($admin->isLoggedIn()){
  include '../components/header.php';
  echo '<body><div id="wrapper">';
  include '../components/side-top-nav.php';
    switch ($_SERVER['REQUEST_URI']) {
      case '/admin/dashboard':
        include 'dashboard.php';
        break;
      case '/admin/add-image':
        include 'add-image.php';
        break;
      case '/admin/add-admin':
        include 'add-admin.php';
        break;
      case '/admin/add-team-member':
        include 'add-team-member.php';
        break;
      default:
        header("Location:/error"); 
        break;
    }
  include '../components/script.php';
  echo '</div></body></html>';  
}else{
  header("Location:/admin"); 
}

?>
