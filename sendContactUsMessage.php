<?php include 'core/init.php'; ?>
<?php
  try{
    $mailer = new Mailer();
    if(isset($_POST['sendContactUsMessage'])){
      $name = filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING);
      $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_STRING);
      $comments = filter_input(INPUT_POST,"comments",FILTER_SANITIZE_STRING);
      $subject = filter_input(INPUT_POST,"subject",FILTER_SANITIZE_STRING);
      $isRequired = array("name", "email", "comments", "subjects");
      if(isRequired($isRequired)){
        if($mailer->sendContactUsMessage($name, $email, $comments, $subject)){
            redirect("contact-us","Message successfully sent","success");
        }else{
          redirect("contact-us", "Failed to send message","error");
        }
      }else{
        redirect("contact-us", "Form must be completed","error");
      }
    }
  }catch(PDOException $e){
    echo "<strong>Error: </strong>". $e->getMessage();
  }

