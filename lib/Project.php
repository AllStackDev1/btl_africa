<?php
class Project {
  private $db ;

  public function __construct(){
    $this->db = new Database();
  }

  public function getAllProjects(){
    $this->db->query("SELECT * FROM images");
    return $this->db->resultSet();
  }

  public function getFewProjects(){
  
  }
}