<?php require "assets/include/header.php"; ?>

<h1>Modification du client</h1>

<?php

var_dump($_GET);

$clientData = array(
    'id' => $_GET['id'],
    'prenom' => $_GET['prenom'],
    'nom' => $_GET['nom'],
    'date' => $_GET['date'],
    'adresse' => $_GET['adresse'],
    'tel' => $_GET['tel'],
    'fixe' => $_GET['fixe'],
    'fax' => $_GET['fax'],
    'siret' => $_GET['siret'],
    'mail' => $_GET['mail']

);

modifClient($clientData);

header('Location: /clientInfo.php?clients='.$clientData['id']);

?>

<?php require "assets/include/footer.php"; ?>