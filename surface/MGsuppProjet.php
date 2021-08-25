<?php require "assets/include/header.php"; ?>

<h1>Suppression du projet</h1>

<?php

delProjet($_GET['idProjet']);

header('Location: http://'.$_SERVER['HTTP_HOST'].'/clientInfo.php?clients='.$_GET['idClient']);

?>


<?php require "assets/include/footer.php"; ?>

