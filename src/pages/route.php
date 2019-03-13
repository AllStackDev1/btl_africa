<?php
  $path = explode("/", $_SERVER['REQUEST_URI']);
  include '../components/header.php';
  include '../components/navbar.php';
  if(isset($path[2])){
    switch ($path[1]) {
      case 'team':
      include 'team-details.php'; 
      break;
    default:
      header("Location:error"); 
      break;
    }
  } else {
    switch ($path[1]) {
      case '':
        include 'home.php'; 
        break;
      case 'home':
        include 'home.php'; 
        break;
      case 'about-us':
        include 'about.php'; 
        break;
      case 'services':
        include 'services.php'; 
        break;
      case 'projects':
        include 'projects.php'; 
        break;
      case 'team':
        include 'team.php'; 
        break;
      case 'team-details':
        include 'team-details.php'; 
        break;
      case 'career':
        include 'career.php'; 
        break;
      case 'contact-us':
        include 'contact.php'; 
        break;
      case 'btl-africa':
        include 'btl-africa.php'; 
        break;
      case 'btl-ghana':
        include 'btl-ghana.php'; 
        break;
      case 'btl-nigeria':
        include 'btl-nigeria.php'; 
        break;
      case 'btl-liberia':
        include 'btl-liberia.php'; 
        break;
      case 'btl-kenya':
        include 'btl-kenya.php'; 
        break;
      case 'btl-sierra-leone':
        include 'btl-sierra-leone.php'; 
        break;
      case 'btl-plus':
        include 'btl-plus.php'; 
        break;
      default:
        header("Location:error"); 
        break;
    }
  }
  include '../components/footer.php';
?>
