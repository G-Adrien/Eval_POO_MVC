<?php

class BookManager {
  
  protected PDO $db;

  public function __construct(){
    try{
      $this->db = new PDO('mysql:host=localhost;dbname=rent_book', 'RentBook', 'book27');
    } catch (PDOException $e) {
      print "Erreur : " . $e->getMessage() . "<br/>";
      die();
    }
  }

  // Récupère tous les livres
  public function getBooks() {
    // Send the query to mysql

    $query = $this->db->prepare(
      "SELECT * FROM book"
    );
    //Extract data from the query as an associative array
    $books = $query->fetchALL(PDO::FETCH_CLASS, "book");
    return $books;
  }

  // Récupère un livre
  public function getBook() {

  }

  // Ajoute un nouveau livre
  public function addBook() {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

}
