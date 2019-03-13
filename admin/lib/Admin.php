
<?php
class Admin {
  private $db ;

  private function setAdminData($row){
    $_SESSION['loggedIn'] = true;
    $_SESSION['id']= $row->userID;
    $_SESSION['name']= $row->name;
  }

  public function __construct(){
    $this->db = new Database();
  }

  public function login($email, $password){
    $this->db->query("SELECT * FROM  admins  WHERE email = :email");
    $this->db->bind(":email", $email);
    $row = $this->db->single();
    if (password_verify($password, $row->password) && $this->db->rowCount() > 0 ) {
      $this->setAdminData($row);
      return true;
    }else{
      return false;
    }
  }

  public function logout(){
    unset($_SESSION['loggedIn']);
    unset($_SESSION['id']);
    unset($_SESSION['name']);
    return true;
  }

  public function isLoggedIn(){
    return (isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn']));
  }

  public function addAdmin($data){
    $this->db->query("INSERT INTO admins (`name`, `email`, `password`) VALUES(:name, :email, :password)");
    $this->db->bind(":name", $data['name']);  
    $this->db->bind(":email", $data['email']);  
    $this->db->bind(":password", $data['password']);
    return $this->db->execute();
  }

  public function getAdmins(){
    $this->db->query("SELECT * FROM admins");
    return $this->db->resultSet();
  }

  public function addImage($data){
    $this->db->query("INSERT INTO images (`file_name`, `title`, `album`, `description`) VALUES(:file_name, :title, :album, :description)");
    $this->db->bind(":file_name", $data['file_name']);
    $this->db->bind(":title", $data['title']);
    $this->db->bind(":album", $data['album']);
    $this->db->bind(":description", $data['description']);

    return $this->db->execute();
  }

  public function getImages(){
    $this->db->query("SELECT * FROM images ORDER BY created_at DESC");
    return $this->db->resultSet();
  }

  public function updateAdmin($data){
    $this->db-> query("UPDATE admins SET 
        name=:name, 
        email =:email,
        password = :password
       WHERE id = :id");
    $this->db->bind(":name", $data['name']);  
    $this->db->bind(":email", $data['email']);  
    $this->db->bind(":password", $data['password']); 
    $this->db->bind(":id",$data['id']);
    return $this->db->execute();
  }

  public function addTeamMember($data){
    $this->db->query("INSERT INTO teams (name, position, description, file_name, email, facebook, twitter, instagram, whatsapp) 
    VALUES(:name, :position, :description, :file_name, :email, :facebook, :twitter, :instagram, :whatsapp)");
    $this->db->bind(":name", $data['name']);
    $this->db->bind(":position", $data['position']);
    $this->db->bind(":description", $data['description']);
    $this->db->bind(":file_name", $data['file_name']);
    $this->db->bind(":email", $data['email']);
    $this->db->bind(":facebook", $data['facebook']);
    $this->db->bind(":twitter", $data['twitter']);
    $this->db->bind(":instagram", $data['instagram']);
    $this->db->bind(":whatsapp", $data['whatsapp']);

    return $this->db->execute();
  }

  public function deleteAdmin($id){
    $this->db->query("DELETE FROM admins WHERE id=:id");
    $this->db->bind(":id",$id);
    return $this->db->execute();
  }

}