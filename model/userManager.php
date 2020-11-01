<?php

class userManager {

  protected PDO $db;

  public function __construct(){
    try{
      $this->db = new PDO('mysql:host=localhost;dbname=rent_book', 'RentBook', 'book27');
    } catch (PDOException $e) {
      print "Erreur : " . $e->getMessage() . "<br/>";
      die();
    }
  }

  // Récupère tous les utilisateurs
  public function getUsers() {
       // Send the query to mysql

       $query = $this->db->query(
        "SELECT * FROM user"
      );
      //Extract data from the query as an associative array
      $users = $query->fetchALL(PDO::FETCH_CLASS, "user");
      return $users;
    }
  

  // Récupère un utilisateur par son id
  public function getUserById() {

  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
}
