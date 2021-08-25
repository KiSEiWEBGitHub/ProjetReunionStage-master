<?php require "assets/include/header.php"; ?>

<body>

<main>
    <div class="row">
        <?php require ('assets/include/sidebar.php')?>
        <div class="col-9">
            <h2>Ajout logement</h2>
            <br>
            <form method="post" autocomplete="off" action="">
                <input type="hidden" name="Code_Client" value="<?php echo $_GET['id'];?>">
                <input type="hidden" name="codeProjet" value="<?php echo $_GET['idProjet'];?>">
                <input type="text" name="nomLogement" placeholder="Nom logement" />
                <br><br>
                <button type="submit" name="b3" class="btn btn-success">Ajouter le logement</button>
                <br>
                <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/clientInfo.php?clients='.$_GET['id'];?>" class="btn btn-primary mt-3">Profil du client</a>                <br><br>
                <?php addlogement(); ?>
                <br><br>
            </form>
        </div>
    </div>
</main>
</main>


</body>


<?php require "assets/include/footer.php"; ?>


