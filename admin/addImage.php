<?php include 'core/init.php'; ?>
<?php
try{
  $admin = new Admin();
  if($admin->isLoggedIn()){
    if(isset($_POST['addImage'])){
      $data = array();
      if(isset($_FILES['file_array'])){
        $name_array = $_FILES['file_array']['name'];
        $tmp_name_array = $_FILES['file_array']['tmp_name'];
        $type_array = $_FILES['file_array']['type'];
        $size_array = $_FILES['file_array']['size'];
        $error_array = $_FILES['file_array']['error'];
        $files = array();
        for($i = 0; $i < count($tmp_name_array); $i++){
          $name = time().$_POST['category'].$name_array[$i];
          if(move_uploaded_file($tmp_name_array[$i], "../uploads/images/project/".$name)){
            $files[] = $name;
          } else {
            echo "move_uploaded_file function failed for ".$name_array[$i]." ". $error_array ."<br>";
            return;
          }
        }
      }
    }
    $data['category'] = filter_input(INPUT_POST,"category",FILTER_SANITIZE_STRING);
    $data['title'] = filter_input(INPUT_POST,"title",FILTER_SANITIZE_STRING);
    $data['description'] =  filter_input(INPUT_POST,"description",FILTER_SANITIZE_STRING);
    $data["files"]  =  implode(SEPARATOR,$files);
    $isRequired = array("category", "title", "description");
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


