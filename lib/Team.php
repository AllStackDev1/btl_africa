<?php
class Team {
  private $db ;

  public function __construct(){
    $this->db = new Database();
  }

  public function getTeamMembers() {
    $this->db->query("SELECT * FROM teams");
    return $this->db->resultSet();
  }

  public function getTeamMember($id) {
    $this->db->query("SELECT * FROM teams WHERE id = '$id'");
    return  $this->db->resultSet();
  }
}