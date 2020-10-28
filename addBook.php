<?php 
require "model/entity/book.php";
require "model/bookManager.php";

$bookManager = new BookManager();

if(!empty($_POST)){
    $book= new book($_POST);
    $bookManager->addBook($book);
}

require "view/addBookView.php";