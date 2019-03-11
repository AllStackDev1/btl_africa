<?php include 'core/init.php'; ?>
<?php
try{
  $admin = new Admin();
  if($admin->isLoggedIn()){
    if(isset($_POST['addAdmin'])){
      $data = array();
      $data['name'] = filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING);
      $data['email'] = filter_input(INPUT_POST,"email",FILTER_SANITIZE_STRING);
      $data ['password']  = password_hash($_POST["password"],PASSWORD_BCRYPT, array('cost'=>12 ));
      $isRequired = array("name", "email", "password");
      if(passwordMatch($_POST['confirm_password'], $_POST["password"])){
        if(isRequired($isRequired)){
          if($admin->addAdmin($data)){
            redirect("add-admin","Admin Created Successfully","success");
          }else{
            redirect("add-admin", "Failed to Submit document, try again","error");
          }
        }else{
          redirect("add-admin", "Form must be completed","error");
        } 
      }else{
        redirect("add-admin", "Password do not match", "error");
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
