<?php require "assets/include/header.php"; ?>

<main>
    <div class="row">
    <?php require ('assets/include/sidebar.php')?>
        <div class="col-9">
            <h2>Nouveau projet</h2>
            <br>
            <form method="POST" autocomplete="off" action="">
                <br><br>
                <input type="text" name="nom_p" placeholder="Nom du projet" />
                <input type="text" name="ad_projet" placeholder="Adresse" />
                <br><br>
                <input type="text" name="terrain" placeholder="Terrain" />
                <input type="text" name="com" placeholder="Commune" />
                <br><br>
                <input type="number" name="CP" placeholder="Code Postal" />
                <input type="text" name="lieu" placeholder="Lieu" />
                <br><br>
                <input type="text" name="sec" placeholder="Section" />
                <input type="number" name="cada" placeholder="Numéro cadastral" />
                <br><br>
                <input type="text" name="parce" placeholder="Surface parcelaire" />
                <input type="text" name="cons" placeholder="Surface constructible" />
                <br><br>
                <input type="number" name="alti" placeholder="Altitude" />
                <br><br>
                <button type="submit" name="b9">Ajouter le projet</button>
            </form>
            <?php addpro();?>
        </div>
    </div>
</main>


<?php require "assets/include/footer.php"; ?>