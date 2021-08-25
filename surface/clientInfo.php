<?php require "assets/include/header.php"; ?>


<main>
    <div class="row">
        <?php require ('assets/include/sidebar.php')?>
        <div class="col-9">
            <div class="col-9">
                <h2>Dashboard</h2>
                <?php
                    $clientData = getClientInfo($_GET['clients']); // Appelle de la fonction
                ?>
                <br>

                <!--- Bouton ----->
                <div class="d-flex align-items-center">

                <form action="index.php" method="get">
                    <button type="submit" class="btn btn-dark mr-2">Retour à la liste des clients</button>
                </form>

                <form action="modifclient.php" method="get">

                    <input type="hidden" value="<?php echo $clientData[0]['id'] ?>" name="idClient">
                    <button type="submit" class="btn btn-success mr-2">Modifier</button>
                </form>

                <form action="MGsuppclient.php" method="get">
                    <input type="hidden" value="<?php echo $clientData[0]['id'] ?>" name="idClient">
                    <button type="submit" class="btn btn-danger mr-2">Supprimer le client</button>
                </form>
                </div>
                <!--- Bouton ----->


                <!----                      Afficher les données des client ------>
                <p><strong class="client_titre"><?php echo $clientData[0]['prenom']." ".$clientData[0]['nom'];?></strong></p>
                <p>Tel : <strong><?php echo $clientData[0]['tel'];?></strong></p>
                <p>Tel Fixe : <strong><?php echo $clientData[0]['tel_fixe'];?></strong></p>
                <p>Mail: <strong><?php echo $clientData[0]['mail'];?></strong></p>
                <p>Adresse : <strong><?php echo $clientData[0]['adresse'];?></strong></p>
                <p>Fax : <strong><?php echo $clientData[0]['fax'];?></strong></p>
                <p>Date de naissance : <strong>
                        <?php
                $date = date_create($clientData[0]['date_de_naissance']);
                $naissance = date_format($date, 'd/m/Y');
                echo $naissance; ?>
                    </strong></p>
                <p>siret : <strong><?php echo $clientData[0]['siret'];?></strong></p>
            </pre>
            <!----                      Afficher les données des client ------>
            </div>
            <br>
            <hr class="hrform">
            <div class="col-9">
            <!----                      Afficher les projets des client ------>
                <h2>Projet associé</h2>
                <br>

                <form action="MGajoutprojet.php" method="get">
                    <input type="hidden" value="<?php echo $clientData[0]['id']; ?>" name="id">
                    <button type="submit" class="btn btn-dark">Ajouter un projet</button>
                </form>
                <br><br>
                

                <?php

                foreach (getProjet($clientData[0]['id']) as $projet){
                    ?>

                    <h3 class="text-light"><?php echo $projet['nom']; ?></h3>
                    <ul class="text-light">
                        <li>Adresse : <strong><?php echo $projet['adresse']; ?></strong></li>
                        <li>Code postal : <strong><?php echo $projet['CP']; ?></strong></li>
                        <li>Commune : <strong><?php echo $projet['commune']; ?></strong></li>
                        <li>Lieu : <strong><?php echo $projet['lieu']; ?></strong></li>
                        <li>Section : <strong><?php echo $projet['sec']; ?></strong></li>
                        <li>Numéro cadastral : <strong><?php echo $projet['cada']; ?></strong></li>
                        <li>Surface parcelaire : <strong><?php echo $projet['parce']; ?></strong></li>
                        <li>Surface constructible : <strong><?php echo $projet['constru']; ?></strong></li>
                        <li>Terrain : <strong><?php echo $projet['terrain']; ?></strong></li>
                        <li>Altitude : <strong><?php echo $projet['altitude']; ?></strong></li>
                    </ul>
<!----                      Afficher les projets des client ------>

                    <div class="d-flex">
                        <form action="MGsuppProjet.php" method="get" class="mr-2">
                            <input type="hidden" value="<?php echo $projet['id']; ?>" name="idProjet">
                            <input type="hidden" value="<?php echo $clientData[0]['id']; ?>" name="idClient">
                            <button type="submit" class="btn btn-danger">Supprimer le projet</button>
                        </form>

                        <form action="modifProjet.php" method="get" class="mr-2">
                            <input type="hidden" value="<?php echo $projet['id']; ?>" name="idProjet">
                            <button type="submit" class="btn btn-success">Modifier le projet</button>
                        </form>
                        <form action="projetglobal.php" method="get">
                            <input type="hidden" value="<?php echo $clientData[0]['id']; ?>" name="idClient">
                            <input type="hidden" value="<?php echo $projet['id']; ?>" name="idProjet">
                            <button type="submit" class="btn btn-dark">Voir plus</button>
                        </form>
                    </div>

                    
                    <br>
                    <?php
                }


                ?>
        </div>
    </div>
</main>


<?php require "assets/include/footer.php"; ?>