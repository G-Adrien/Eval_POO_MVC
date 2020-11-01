<?php 

require "template/header.php";


?>

<div class= "container">
    <h3 class= "fontTitle" >Livres au catalogue:</h3>

    <table class="table table-hover ">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titre</th>
          <th scope="col">Auteur</th>
          <th scope="col">Parution</th>
          <th scope="col">Disponibilité</th>
          <th scope="col">Détails</th>
        </tr>
      </thead>
      <tbody>

        <?php 
          foreach($books as $key =>$book):
        ?>
        
        <tr>
          <th scope="row"><?php echo $book->getId(); ?></th>
          <td><?php echo $book->getTitle(); ?></td>
          <td><?php echo $book->getAuthor(); ?></td>
          <td><?php echo $book->getPublication(); ?></td>
          <td><?php?> ?</td>
          <td><?php?> <a href="book.php?<?php echo "id=".$book->getId();?>" class="seeMoreLink">Voir plus</a></td>
        </tr>

      <?php
      endforeach;
      ?>
    </tbody>
  </table>
    
</div>

<?php require "template/footer.php"?>
