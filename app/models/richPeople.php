<?php
  class richPeople {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getCountries() {
      $this->db->query("SELECT * FROM `RichestPeople`;");

      $result = $this->db->resultSet();

      return $result;
    }
  }