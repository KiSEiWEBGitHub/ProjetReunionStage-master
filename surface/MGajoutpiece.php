<?php require ('assets/include/header.php')?>

<main>
    <div class="row">
        <?php require ('assets/include/sidebar.php')?>
        <div class="col-9">
            <h2>Ajouter une pièce</h2>
            <br>
            <form method="post" autocomplete="off" action="">
                <input type="hidden" name="Code_Logement" value="<?php echo $_GET['idLogement'];?>">
                <input type="text" name="nomPiece" placeholder="Nom pièce" />
                <input type="number" name="surface" placeholder="Surface" />
                <br><br>
                <input type="number" name="hauteur" placeholder="Hauteur" />
                <input type="number" name="largeur" placeholder="Largeur" />
                <br><br>
                <select id="catg" name="catg" style="width: 212px;" onclick='test()'>
                    <option value="Battante" name="Battante">Battante</option>
                    <option value="Coulissante" name="Coulissante">Coulissante</option>
                    <option value="Escamotable" name="Escamotable">Escamotable</option>
                    <option value="Soufflet" name="Soufflet">Soufflet</option>
                    <option value="jalousie" name="jalousie">Lame jalousie</option>
                    <option value="Orientable" name="Orientable">Lame Orientable</option>
                    <option value="fixe" name="fixe">Fixe</option>
                </select>
                <br><br>
                <select id="c1" name="c1" style="display: none">
                    <option value="Fenêtre" name="Fenêtre">Fenêtre</option>
                    <option value="Porte-fenêtre" name="Porte-fenêtre">Porte-fenêtre</option>
                    <option value="Porte-pallière" name="Porte-pallière">Porte-pallière</option>
                </select>

                <select id="c2" name="c2" style="display: none">
                    <option value="Porte-fenêtre 2 vantaux" name="Porte-fenêtre 2 vantaux">Porte-fenêtre 2 vantaux</option>
                    <option value="Porte-fenêtre 3 vantaux" name="Porte-fenêtre 3 vantaux">Porte-fenêtre 3 vantaux</option>
                    <option value="Porte-fenêtre 4 vantaux" name="Porte-fenêtre 4 vantaux">Porte-fenêtre 4 vantaux</option>
                </select>

                <select id="c3" name="c3" style="display: none">
                    <option value="Galandage" name="Galandage">Galandage</option>
                    <option value="Applique" name="Applique">Applique</option>
                    <option value="Fenêtre 2 vantaux" name="Fenêtre 2 vantaux">Fenêtre 2 vantaux</option>
                </select>
                <br>
                <input type="submit" name="b5" value="Ajouter la pièce" />
                <br>
                <?php addpiece(); ?>
            </form>

            <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/clientInfo.php?clients='.$_GET['idClient'];?>" class="btn btn-primary">Profil du client</a>
        </div>
    </div>
</main>


<?php require ('assets/include/footer.php')?>