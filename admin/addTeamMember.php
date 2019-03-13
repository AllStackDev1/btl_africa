<?php include 'core/init.php'; ?>
<?php
try{
  $admin = new Admin();
  if($admin->isLoggedIn()){
    if(isset($_POST['addTeamMember'])){
      $data = array();
      if(isset($_FILES['file'])){
        $name = time()."".$_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        if(move_uploaded_file($tmp_name, "../uploads/images/team/".$name)){
          $data['file_name'] = $name;
        } else {
          echo "move_uploaded_file function failed for ".$_FILES['file']['name']." ".$_FILES['file']['error']."<br>";
          return;
        }
      }
      $data['position'] = filter_input(INPUT_POST,"position",FILTER_SANITIZE_STRING);
      $data['name'] = filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING);
      $data['description'] = filter_input(INPUT_POST,"description",FILTER_SANITIZE_STRING);
      $data['facebook'] = filter_input(INPUT_POST,"facebook",FILTER_SANITIZE_STRING);
      $data['twitter'] = filter_input(INPUT_POST,"twitter",FILTER_SANITIZE_STRING);
      $data['instagram'] = filter_input(INPUT_POST,"instagram",FILTER_SANITIZE_STRING);
      $data['whatsapp'] = filter_input(INPUT_POST,"whatsapp",FILTER_SANITIZE_STRING);
      $isRequired = array("position","name", "description");
      if(isRequired($isRequired)){
        if($admin->addTeamMember($data)){
          redirect("add-admin","New Team Member Added Successfully","success");
        }else{
          redirect("add-admin", "Failed to Submit document, try again","error");
        }
      }else{
        redirect("add-admin", "Form must be completed","error");
      } 
    } else {
      redirect("add-admin", "Form must be completed", "error");
    }
  }else{
    echo "admin Must Log IN";
  } 
}catch(PDOException $e){
  echo "<strong>Error: </strong>". $e->getMessage();
}
