<?php require "assets/include/header.php"; ?>

    <main>
        <div class="row">
            <?php require ('assets/include/sidebar.php')?>
            <div class="col-9">
                <h2>Modifier le projet</h2>

                <?php $projetData = getProjetInfo($_GET['idProjet']); ?>

                <form method="get" action="MGmodifProjet.php">
                    <input type="hidden" value="<?php echo $projetData[0]['id'];?>" name="idProjet">
                    <input type="hidden" value="<?php echo $projetData[0]['Code_Client'];?>" name="idClient">
                    <input type="text" name="nom_p" placeholder="Nom du projet" value="<?php echo $projetData[0]['nom'];?>"/>
                    <input type="text" name="ad_projet" placeholder="Adresse" value="<?php echo $projetData[0]['adresse'];?>"/>
                    <br><br>
                    <input type="text" name="terrain" placeholder="Terrain" value="<?php echo $projetData[0]['terrain'];?>"/>
                    <input type="text" name="com" placeholder="Commune" value="<?php echo $projetData[0]['commune'];?>"/>
                    <br><br>
                    <input type="number" name="CP" placeholder="Code Postal" value="<?php echo $projetData[0]['CP'];?>"/>
                    <input type="text" name="lieu" placeholder="Lieu" value="<?php echo $projetData[0]['lieu'];?>"/>
                    <br><br>
                    <input type="text" name="sec" placeholder="Section" value="<?php echo $projetData[0]['sec'];?>"/>
                    <input type="number" name="cada" placeholder="Numéro cadastral" value="<?php echo $projetData[0]['cada'];?>"/>
                    <br><br>
                    <input type="text" name="parce" placeholder="Surface parcelaire" value="<?php echo $projetData[0]['parce'];?>"/>
                    <input type="text" name="cons" placeholder="Surface constructible" value="<?php echo $projetData[0]['constru'];?>"/>
                    <br><br>
                    <input type="number" name="alti" placeholder="Altitude" value="<?php echo $projetData[0]['altitude'];?>"/>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>
    </main>


<?php require "assets/include/footer.php"; ?>