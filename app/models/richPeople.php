<?php
class richPeople
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getRichpeople()
  {
    $this->db->query("SELECT * FROM `richestpeople`;");

    $result = $this->db->resultSet();

    return $result;
  }
}