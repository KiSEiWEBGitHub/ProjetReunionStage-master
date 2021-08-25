<?php require "assets/include/header.php"; ?>

    <main>
        <div class="row">
            <?php require ('assets/include/sidebar.php')?>
            <div class="col-9">
                <a class="btn btn-primary" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/clientInfo.php?clients='.$_GET['idClient']; ?>">Retour vers le profil</a>

                <br><br>

                <h2>Projets</h2>
                
                <br>
                    <?php
                    $projet = getProjetInfo($_GET['idProjet'])[0];
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

                <br><br>

                <h2>Logements associés</h2>
                <br>
                <form action="MGLogement.php" method="get">
                    <input type="hidden" value="<?php echo $_GET['idClient']; ?>" name="id">
                    <input type="hidden" value="<?php echo $_GET['idProjet']; ?>" name="idProjet">
                    <button type="submit" class="btn btn-dark">Ajouter Logement</button>
                </form>

                <br>

                <?php
                $logements = getLogementsFromProjet($_GET['idProjet']);

                foreach ($logements as $logement){
                    ?>
                    <h2><?php echo $logement['nom']; ?></h2>
                    <?php


                    echo '<table class="tableau2">';
                    echo'<tr><th class="thre">Pièce</th><th class="thre">Hauteur</th><th class="thre">Largeur</th><th class="thre">Menuiserie</th><th class="thre">Surface</th><th class="thre">Type</th><th class="thre">Porosite</th></tr>';
                    foreach(getListePiece($logement['id']) as $piece){
                        echo '<tr>';
                        echo '<td class="c1">'.$piece['nom'].'</td>';
                        echo '<td class="c1">'.$piece['hauteur'].'m</td>';
                        echo '<td class="c1">'.$piece['largeur'].'m</td>';
                        echo '<td class="c1">'.$piece['menuiserie'].'</td>';
                        echo '<td class="c1">'.$piece['surface'].'m²</td>';
                        echo '<td class="c1">'.$piece['type_menuiserie'].'</td>';
                        echo '<td class="c1">'.$piece['porosite'].'</td>';
                        ?>
                        <td class="c1">
                            <div class=" ">
                                <form action="MGsuppPiece.php" method="get" class="my-2">
                                    <input type="hidden" value="<?php echo $piece['id']; ?>" name="idPiece">
                                    <input type="hidden" value="<?php echo $_GET['idProjet']; ?>" name="idProjet">
                                    <input type="hidden" value="<?php echo $_GET['idClient']; ?>" name="idClient">
                                    <button type="submit" class="btn btn-danger mr-2">Supprimer</button>
                                </form>

                                <form action="modifPiece.php" method="get" class="my-2">
                                    <input type="hidden" value="<?php echo $piece['id']; ?>" name="idPiece">
                                    <input type="hidden" value="<?php echo $_GET['idClient'] ?>" name="idClient">
                                    <button type="submit" class="btn btn-dark mr-2">Modifier</button>
                                </form>
                            </div>
                        </td>

                        <?php
                        echo '</tr>';
                    }
                    echo '</table>';

                    ?>
                    <br>
                    <div class="d-flex align-items-center">
                        <form action="MGajoutpiece.php" method="get">
                            <input type="hidden" value="<?php echo $logement['id']; ?>" name="idLogement">
                            <input type="hidden" value="<?php echo $_GET['idClient']; ?>" name="idClient">
                            <button type="submit" class="btn btn-dark mr-2">Nouvelle pièce</button>
                        </form>
                        <form action="MGsuppLogement.php" method="get">
                            <input type="hidden" value="<?php echo $logement['id']; ?>" name="idLogement">
                            <input type="hidden" value="<?php echo $_GET['idClient']; ?>" name="idClient">
                            <input type="hidden" value="<?php echo $_GET['idProjet']; ?>" name="idProjet">
                            <button type="submit" class="btn btn-danger mr-2">Supprimer le logement</button>
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