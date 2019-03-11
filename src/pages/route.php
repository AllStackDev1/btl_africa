<?php
  include '../components/header.php';
    include '../components/navbar.php';
    switch ($_SERVER['REQUEST_URI']) {
      case '/':
        include 'home.php'; 
        break;
      case '/home':
        include 'home.php'; 
        break;
      case '/the-company':
        include 'thecompany.php'; 
        break;
      case '/about-us':
        include 'about.php'; 
        break;
      case '/services':
        include 'services.php'; 
        break;
      case '/projects':
        include 'projects.php'; 
        break;
      case '/team':
        include 'team.php'; 
        break;
      case '/team-details':
        include 'teamDetail.php'; 
        break;
      case '/career':
        include 'career.php'; 
        break;
      case '/contact-us':
        include 'contact.php'; 
        break;
      default:
        header("Location:error"); 
        break;
    }
    include '../components/footer.php';
?>
