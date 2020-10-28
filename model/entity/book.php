<?php
// Classe représentant les livres stockés en base de données
class Book {

     //Propriétés 

     protected int $id;
     protected string $title;
     protected string $author;
     protected string $summary;
     protected string $publication;

 
     //Méthodes
 
     // setter
    
     public function setId(string $id) {
        $this->id = $id;
        }
     
     public function setTitle(string $title) {
         $this->title = $title;
         }
 
     public function setAuthor(string $author) {
         $this->author = $author;
         }
 
     public function setSummary(string $summary) {
         $this->summary = $summary;
         }
     
     public function setPublication(string $publication) {
         $this->publication = $publication;
         }
 

 
     // getter
 
     public function getId() {
         return $this->id;
    }
     public function getTitle() {
         return $this->title;
    }
 
     public function getAuthor() {
         return $this->author;
    }
 
     public function getSummary() {
         return $this->summary;
    }
 
     public function getPublication() {
         return $this->publication;
    }
 


}
