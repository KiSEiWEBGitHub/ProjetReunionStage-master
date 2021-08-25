<?php require "assets/include/header.php"; ?>

    <h1>Modification de la pièce</h1>


<?php


if (!empty($_GET['c1'])){
    $type_menu = $_GET['c1'];
} else{
    if(!empty($_GET['c2'])){
        $type_menu = $_GET['c2'];
    } else {
        if(!empty($_GET['c3'])){
            $type_menu = $_GET['c3'];
        }
    }
}

$lieu = isset($_POST['lieu']) ? $_POST['lieu'] : NULL;

$pieceData = array(
    'id' => $_GET['id'],
    'nom' => $_GET['nomPiece'],
    'hauteur' => $_GET['hauteur'],
    'largeur' => $_GET['largeur'],
    'menuiserie' => $_GET['catg'],
    'type_menuiserie' => $type_menu
);



modifPiece($pieceData);

header('Location: /clientInfo.php?clients='.$_GET['idClient']);

?>



<?php require "assets/include/footer.php"; ?>