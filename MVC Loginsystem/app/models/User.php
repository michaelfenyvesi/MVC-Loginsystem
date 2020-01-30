<?php
  class User {
    private $db;
 
    public function __construct(){
      $this->db = new Database;
    }
    // Regsiter user
      public function getdata () {
          $this->db->query("SELECT * FROM user");
      }
    public function register($data){
      $this->db->query("INSERT INTO user (vorname, nachname, avatar, username, email, passwort)
                        VALUES(:vorname, :nachname, :avatar, :username, :email, :passwort)");
      
      $this->db->bind(':vorname', $data['vorname']);
      $this->db->bind(':nachname', $data['nachname']);
      $this->db->bind(':avatar', $data['avatar']);
      $this->db->bind(':username', $data['uid']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':passwort', $data['passwort1']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Login User
    public function login($email, $passwort){
      $this->db->query("SELECT * FROM user WHERE email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      $hashed_password = $row->passwort;
      if(password_verify($passwort, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }

    public function findUserByEmail($email){
      $this->db->query("SELECT * FROM user WHERE email = :email");
      // Bind value
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }
  }