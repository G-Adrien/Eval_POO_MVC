<?php
// Contrôleur qui gérer l'affichage de tous les livres

require "model/entity/book.php";
require "model/bookManager.php";

$bookManager = new BookManager();
$books = $bookManager->getBooks();
var_dump($books);


require "view/indexView.php";
