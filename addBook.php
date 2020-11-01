<?php 
require "model/entity/book.php";
require "model/bookManager.php";

$bookManager = new BookManager();

if(!empty($_POST)){
    $book= new book($_POST);
    $bookManager->addBook($book);
}

$title = " -- ";
if(isset($_POST["title"]) && !empty($_POST["title"])){
    $title = htmlspecialchars($_POST["title"]);
}

$author = "  --  ";
if(isset($_POST["author"]) && !empty($_POST["author"])){
    $author = htmlspecialchars($_POST["author"]);
}

$summary = "  --  ";
if(isset($_POST["summary"]) && !empty($_POST["summary"])){
    $summary = htmlspecialchars($_POST["summary"]);
}

$publication = "  --  ";
if(isset($_POST["publication"]) && !empty($_POST["publication"])){
    $publication = htmlspecialchars($_POST["publication"]);
}



require "view/addBookView.php";