<?php require "template/header.php"?>
<div class= "container">
    <h3 class= "fontTitle" >Ajouter un livre au catalogue:</h3>
    
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Formulaire d'ajout d'un livre</h5>
                    <p class="card-text text-center">Veuillez remplir le formulaire suivant afin d'ajouter un livre au catalogue.</p>
                    <div id="addBookFormDiv">

                        <form action="#" method="post" id ="addBookForm">
                            <div class= "field">
                                <label for="title">Titre:</label>
                                <br>
                                <input type="text" name="title" id="title">
                            </div>
                            <div div class= "field">
                                <label for="author">Auteur:</label>
                                <br>
                                <input type="text" name="author" id="author">
                            </div>
                            <div div class= "field">
                                <label for="summary">Synopsis:</label>
                                <br>
                                <textarea type="text" name="summary" id="summary"></textarea>
                            </div>
                            <div div class= "field">
                                <label for="publication">Parution:</label>
                                <br>
                                <input type="date" name="publication" id="publication">
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btnAddBookForm">Ajouter</a>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Livre ajouté :</h5>
                    <p class="card-text text-center">Vous venez d'ajouter le livre suivant:</p>
                </div>
            </div>
        </div>
    </div>
    
</div>


<?php require "template/footer.php"?>
