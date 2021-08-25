<?php require "assets/include/header.php"; ?>

<main>
    <div class="row">
        <?php require ('assets/include/sidebar.php')?>
        <div class="col-9">
            <h2>Modifier le client</h2>

            <?php $clientData = getClientInfo($_GET['idClient']);?>


            <form method="get" action="MGmodifierClient.php">
                <input type="hidden" value="<?php echo $_GET['idClient'];?>" name="id">
                <input type="text" name="prenom" placeholder="Prénom" value="<?php echo $clientData[0]['prenom']; ?>">
                <input type="text" name="nom" placeholder="Nom" value="<?php echo $clientData[0]['nom']; ?>">
                <br><br>
                <input type="date" name="date" placeholder="Date de naissance" value="<?php echo $clientData[0]['date_de_naissance']; ?>">
                <input type="text" name="adresse" placeholder="Adresse" value="<?php echo $clientData[0]['adresse']; ?>">
                <br><br>
                <input type="number" name="tel" placeholder="Mobile" value="<?php echo $clientData[0]['tel']; ?>">
                <input type="number" name="fixe" placeholder="Fixe" value="<?php echo $clientData[0]['tel_fixe']; ?>">
                <br><br>
                <input type="number" name="fax" placeholder="Fax" value="<?php echo $clientData[0]['fax']; ?>">
                <input type="number" name="siret" placeholder="Siret" value="<?php echo $clientData[0]['siret']; ?>">
                <br><br>
                <input type="email" name="mail" placeholder="Mail" value="<?php echo $clientData[0]['mail']; ?>">
                <br><br>

                <button type="submit" class="btn btn-primary">Modifier</button>

            </form>
        </div>
    </div>
</main>


<?php require "assets/include/footer.php"; ?>