<?php require "assets/include/header.php"; ?>

    <h1>Modification du projet</h1>


<?php



$projetData = array(
    'idProjet' => $_GET['idProjet'],
    'nom' => $_GET['nom_p'],
    'ad_projet' => $_GET['ad_projet'],
    'terrain' => $_GET['terrain'],
    'com' => $_GET['com'],
    'CP' => $_GET['CP'],
    'lieu' => $_GET['lieu'],
    'sec' => $_GET['sec'],
    'cada' => $_GET['cada'],
    'parce' => $_GET['parce'],
    'cons' => $_GET['cons'],
    'alti' => $_GET['alti']

);

modifProjet($projetData);

header('Location: /clientInfo.php?clients='.$_GET['idClient']);

?>

<?php require "assets/include/footer.php"; ?>