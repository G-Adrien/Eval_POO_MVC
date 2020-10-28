<?php
require "template/header.php"?>
<div class= "container">
    <h3 class= "fontTitle" >Listes des clients:</h3>
    <table class="table table-hover ">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Prénom</th>
          <th scope="col">Nom</th>
          <th scope="col">Email</th>
          <th scope="col">sexe</th>
          <th scope="col">Détails</th>
        </tr>
      </thead>
      <tbody>

        <?php 
          foreach($users as $key =>$user):
        ?>
        
        <tr>
          <th scope="row"><?php echo $user->getId(); ?></th>
          <td><?php echo $user->getFirstname(); ?></td>
          <td><?php echo $user->getLastname(); ?></td>
          <td><?php echo $user->getEmail(); ?></td>
          <td><?php echo $user->getSex(); ?></td>
          <td><?php?> <a href="#">Voir plus</a></td>
        </tr>

      <?php
      endforeach;
      ?>
    </tbody>
  </table>
    
</div>

<?php require "template/footer.php"?>
