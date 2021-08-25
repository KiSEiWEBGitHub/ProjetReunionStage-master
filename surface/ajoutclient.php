<?php require "assets/include/header.php"; ?>
<main>
    <div class="row">
        <?php require ('assets/include/sidebar.php')?>
        <div class="col-9">
            <h2>Ajouter un client</h2>
      
      <br>

        <form method="POST" autocomplete="off" action="" class="form_ajout_client">

            <input type="text" name="prenom" placeholder="Prénom" />
            <input type="text" name="nom" placeholder="Nom" />

            <br><br>

            <input type="date" name="date" placeholder="Date de naissance" />
            <input type="text" name="adresse" placeholder="Adresse" />

            <br><br>

            <input type="number" name="tel" placeholder="Mobile" />
            <input type="number" name="fixe" placeholder="Fixe" />

            <<br><br>

            <input type="number" name="fax" placeholder="Fax" />
            <input type="number" name="siret" placeholder="Siret" />

            <br><br>

            <input type="email" name="mail" placeholder="Mail" />

            <br><br>

            <input type="submit" name="b1" value="Ajouter" />

           
        </form>
        
        <?php add_client(); ?>
            
        </div>
    </div>




<?php require "assets/include/footer.php"; ?>