<?php require "template/header.php"?>
<div class= "container">
    <div class="btnBack">
        <a href="users.php" >Retour</a>
    </div>
    <div class="card">
                <div class="card-body">
                    <h3 class="text-center userTitle">Fiche client</h3>

                    <div class="row">
                        <div class="col ">
                            <p class="card-title ">
                                <span class="font-weight-bold ">Nom:</span>
                                <?php echo "Nom";?>
                                <span class="font-weight-bold userSpan">Prénom:</span>
                                <?php echo "prénom";?>
                            </p>
                            <p>
                                <span class="font-weight-bold ">N°:</span>
                                <?php echo "id";?>
                                <span class="font-weight-bold ">E-mail:</span>
                                <?php echo "mail";?>
                                <br>
                                <span class="font-weight-bold ">Age:</span>
                                <?php echo "age";?>
                                <br>
                                <span class="font-weight-bold ">Adresse:</span>
                                <?php echo "address";?>
                                <br>
                                <span class="font-weight-bold ">Sexe:</span>
                                <?php echo "sexe";?>
                                <br>
                                <span class="font-weight-bold ">Date de naissance:</span>
                                <?php echo "Date de naissance";?>
                            </p>
                        </div>
                        <div class="col card">
                            <h4 class="text-center">Livre actuellement loué:</h4>
                        </div>

                    </div>
                        


                </div>
            </div>
    
</div>

<?php require "template/footer.php"?>
