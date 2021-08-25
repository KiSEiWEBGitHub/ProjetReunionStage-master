<?php require "assets/include/header.php"; ?>

<h1>Suppression du la pièce</h1>

<?php

delPiece($_GET['idPiece']);


header('Location: '.'http://'.$_SERVER['HTTP_HOST'].'/projetglobal.php?idClient='.$_GET['idClient'].'&idProjet='.$_GET['idProjet']);

?>


<?php require "assets/include/footer.php"; ?>

