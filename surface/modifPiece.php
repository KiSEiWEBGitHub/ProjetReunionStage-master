<?php require "assets/include/header.php"; ?>

    <main>
        <div class="row">
            <?php require ('assets/include/sidebar.php')?>
            <div class="col-9">


                <?php
                $pieceData = getPiece($_GET['idPiece']);
                ?>

                <h2>Modifier la piece</h2>
                <br>
                <form method="get" autocomplete="off" action="MGmodifPiece.php">
                    <input type="hidden" name="idClient" value="<?php echo $_GET['idClient'];?>">
                    <input type="hidden" name="id" value="<?php echo $pieceData[0]['id'];?>">
                    <input type="text" name="nomPiece" placeholder="Nom pièce" value="<?php echo $pieceData[0]['nom'];?>"/>
                    <br><br>
                    <input type="number" name="hauteur" placeholder="Hauteur" value="<?php echo $pieceData[0]['hauteur'];?>"/>
                    <input type="number" name="largeur" placeholder="Largeur" value="<?php echo $pieceData[0]['largeur'];?>"/>
                    <br><br>
                    <select id="catg" name="catg" style="width: 212px;" onclick='test()'>
                        <option value="Battante" name="Battante" <?php if ($pieceData[0]['menuiserie'] == 'Battante'): ?> selected<?php endif; ?>>Battante</option>
                        <option value="Coulissante" name="Coulissante" <?php if ($pieceData[0]['menuiserie'] == 'Coulissante'): ?> selected<?php endif; ?>>Coulissante</option>
                        <option value="Escamotable" name="Escamotable" <?php if ($pieceData[0]['menuiserie'] == 'Escamotable'): ?> selected<?php endif; ?>>Escamotable</option>
                    </select>
                    <br><br>
                    <select id="c1" name="c1" style="display: none">
                        <option value="" name=""></option>
                        <option value="Fenêtre" name="Fenêtre" <?php if ($pieceData[0]['type_menuiserie'] == 'Fenêtre'): ?> selected<?php endif; ?>>Fenêtre</option>
                        <option value="Porte-fenêtre" name="Porte-fenêtre" <?php if ($pieceData[0]['type_menuiserie'] == 'Porte-fenêtre'): ?> selected<?php endif; ?>>Porte-fenêtre</option>
                        <option value="Porte-pallière" name="Porte-pallière" <?php if ($pieceData[0]['type_menuiserie'] == 'Porte-pallière'): ?> selected<?php endif; ?>>Porte-pallière</option>
                    </select>

                    <select id="c2" name="c2" style="display: none">
                        <option value="" name=""></option>
                        <option value="Porte-fenêtre 2 vantaux" name="Porte-fenêtre 2 vantaux" <?php if ($pieceData[0]['type_menuiserie'] == 'Porte-fenêtre 2 vantaux'): ?> selected<?php endif; ?>>Porte-fenêtre 2 vantaux</option>
                        <option value="Porte-fenêtre 3 vantaux" name="Porte-fenêtre 3 vantaux" <?php if ($pieceData[0]['type_menuiserie'] == 'Porte-fenêtre 3 vantaux'): ?> selected<?php endif; ?>>Porte-fenêtre 3 vantaux</option>
                        <option value="Porte-fenêtre 4 vantaux" name="Porte-fenêtre 4 vantaux" <?php if ($pieceData[0]['type_menuiserie'] == 'Porte-fenêtre 4 vantaux'): ?> selected<?php endif; ?>>Porte-fenêtre 4 vantaux</option>
                    </select>

                    <select id="c3" name="c3" style="display: none">
                        <option value="" name=""></option>
                        <option value="Galandage" name="Galandage" <?php if ($pieceData[0]['type_menuiserie'] == 'Galandage'): ?> selected<?php endif; ?>>Galandage</option>
                        <option value="Applique" name="Applique" <?php if ($pieceData[0]['type_menuiserie'] == 'Applique'): ?> selected<?php endif; ?>>Applique</option>
                        <option value="Fenêtre 2 vantaux" name="Fenêtre 2 vantaux" <?php if ($pieceData[0]['type_menuiserie'] == 'Fenêtre 2 vantaux'): ?> selected<?php endif; ?>>Fenêtre 2 vantaux</option>
                    </select>
                    <br>
                    <input type="submit" name="b5" value="Modifier la pièce" />
                    <br>
                </form>
                <br>
                <br>
                <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/clientInfo.php?clients='.$_GET['idClient'];?>" class="btn btn-primary">Profil du client</a>
            </div>
        </div>
    </main>


<?php require "assets/include/footer.php"; ?>