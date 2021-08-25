<?php require "assets/include/header.php"; ?>

<main>
    <div class="row">
    <?php require ('assets/include/sidebar.php')?>
        <div class="col-9">
            <h2>Dashboard</h2>
            <form action="#" method="post" class="formClient">

                <select class="clients w-50" name="clients">
                    <option value="null">Liste des projets</option>
                    <?php
                    foreach (getProjets() as $projet){?>
                        <option value="<?php echo $projet['id'];?>"><?php echo $projet['nom']." ".$projet['adresse']; ?></option>
                    <?php } ?>
                </select>

                <button type="submit" class="submitBtn" disabled>Voir sa fiche</button>

            </form>
            
            <?php addpro();?>

        </div>
    </div>
</main>


<?php require "assets/include/footer.php"; ?>