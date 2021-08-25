<?php require "assets/include/header.php"; ?>

<h1>Suppression du client</h1>

<?php

delClient($_GET['idClient']);

header('Location: /');

?>


<?php require "assets/include/footer.php"; ?>

