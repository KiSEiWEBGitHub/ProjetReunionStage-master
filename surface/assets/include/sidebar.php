<div class="col-3 sidebar">
    <h2>Menu</h2>
    <ul>
        <li>
            <a href="#">Clients</a><i class="fas fa-chevron-right"></i>
            <ul>
                <li><a href="<?php echo ('http://'.$_SERVER['HTTP_HOST']); ?>">Liste des clients</a></li>
                <li><a href="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/ajoutclient.php"); ?>">Ajouter un client</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Projets</a>
            <ul>
                <li><a href="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/projet.php");?>">Liste des projets</a></li>
                <li><a href="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/ajoutprojet.php");?>">Ajouter un projet</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Pièces</a>
            <ul>
                <li><a href="#">Ajout pièce</a></li>
            </ul>
        </li>
    </ul>
</div>
