<?php require "assets/include/header.php"; ?>

<h1>Suppression du logement</h1>

<?php

delLogement($_GET['idLogement']);

header('Location: '.'http://'.$_SERVER['HTTP_HOST'].'/projetglobal.php?idClient='.$_GET['idClient'].'&idProjet='.$_GET['idProjet']);

?>


<?php require "assets/include/footer.php"; ?>

