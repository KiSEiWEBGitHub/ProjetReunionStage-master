<?php require "assets/include/header.php"; ?> <!-- Appelle du Header -->

<body>


<main>
    <div class="row">
    <?php require ('assets/include/sidebar.php')?> <!-- Appelle du menu -->
        <div class="col-9">
            <h2>Dashboard</h2>

             <!-- Formulaire pour lister les noms des clients dans le menu select -->
            <form action="clientInfo.php" method="get" class="formClient">

                <select class="clients w-50" name="clients">
                    <option value="null">Liste des clients</option>
                    <?php
                    foreach (getClients() as $client){?>
                        <option value="<?php echo $client['id'];?>"><?php echo $client['prenom']." ".$client['nom']; ?></option>
                        <!-- Ligne qui permet de selectionner tout les ID et prénom de tout les clients dans la base de données -->
                    <?php } ?>
                </select>

                <button type="submit" class="submitBtn" disabled>Voir sa fiche</button>
            </form>
        </div>


    </div>
</main>


</body>


<?php require "assets/include/footer.php"; ?>


