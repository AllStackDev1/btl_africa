<?php include 'core/init.php'; ?>
<?php
try{
  $admin = new Admin();
  if($admin->isLoggedIn()){
    if(isset($_POST['addImage'])){
      $data = array();
      if(isset($_FILES['file'])){
        $name = time()."".$_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        // $type = $_FILES['file']['type'];
        // $size = $_FILES['file']['size'];
        // $error = $_FILES['file']['error'];
        if(move_uploaded_file($tmp_name, "../uploads/images/project/".$name)){
          $data['file_name'] = $name;
        } else {
          echo "move_uploaded_file function failed for ".$_FILES['file']['name']." ".$_FILES['file']['error']."<br>";
          return;
        }
      }
    }
    $data['album'] = filter_input(INPUT_POST,"album",FILTER_SANITIZE_STRING);
    $data['title'] = filter_input(INPUT_POST,"title",FILTER_SANITIZE_STRING);
    $data['description'] =  filter_input(INPUT_POST,"description",FILTER_SANITIZE_STRING); 
    $isRequired = array("album", "title", "description");
    if(isRequired($isRequired)){
      if($admin->addImage($data)){
        redirect("add-image","Submitted successfully","success");
      }else{
        redirect("add-image", "Failed to Submit document, try again","error");
      }
    }else{
        redirect("add-image", "Form must be completed","error");
    }
  }else{
    echo "admin Must Log IN";
  } 
}catch(PDOException $e){
  echo "<strong>Error: </strong>". $e->getMessage();
}


