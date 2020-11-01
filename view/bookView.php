<?php require "template/header.php"?>
<div class= "container">
    <div class="btnBack">
        <a href="index.php" >Retour</a>
    </div>
    <div class="card">
                <div class="card-body">
                    <p class="card-title text-center font-weight-bold bookTitle">
                        <?php
                        echo "Titre";
                        ?>
                    </p>
                    <p class="card-text text-center font-italic">De :</p>
                    <p class="card-text text-center font-weight-bold bookAuthor">
                        <?php
                        echo "Auteur";
                        ?>                
                    </p>
                    <p><samp class="fontSpan">Parution:</samp>  

                    <?php echo "Parution"; ?>
                    </p>
                    <br>
                    <div class="row">
                        <div class="card col">
                            <p class="fontSpan">Synopsis :</p>
                            <p>
                                <?php
                                    echo "Summary";
                                ?>
                            </p>
                        </div>

                        <div class="card col">
                           <p class="fontSpan">Disponibilité :</p> 
                            
                        </div>
                    </div>


                </div>
            </div>
    
</div>

<?php require "template/footer.php"?>
