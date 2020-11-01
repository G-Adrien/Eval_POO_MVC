<?php
// Contrôleur qui gère l'affichage de tous les utilisateurs

require "model/entity/user.php";
require "model/userManager.php";

$userManager = new userManager();
$users = $userManager->getUsers();

require "view/usersView.php";