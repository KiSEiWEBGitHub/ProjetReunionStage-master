<?php 
  
    //--------------------------Ajout client---------------------//
    function add_client(){

        $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");

        $nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
        $preno = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
        $ad = isset($_POST['adresse']) ? $_POST['adresse'] : NULL;
        $date = isset($_POST['date']) ? $_POST['date'] : NULL;
        $tel = isset($_POST['tel']) ? $_POST['tel'] : NULL;
        $fixe = isset($_POST['fixe']) ? $_POST['fixe'] : NULL;
        $fax = isset($_POST['fax']) ? $_POST['fax'] : NULL;
        $siret = isset($_POST['siret']) ? $_POST['siret'] : NULL;
        $mail = isset($_POST['mail']) ? $_POST['mail'] : NULL;

        if(isset($_POST['b1'])){
            if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['adresse']) && !empty($_POST['date']) && !empty($_POST['tel']) && !empty($_POST['fixe']) && !empty($_POST['fax']) && !empty($_POST['siret']) && !empty($_POST['mail'])){
                $insert = $bdd->prepare("INSERT INTO client (nom, prenom, adresse, date_de_naissance, tel, tel_fixe, fax, siret, mail) VALUE(?,?,?,?,?,?,?,?,?)");
                $insert->execute(array($nom, $preno, $ad, $date, $tel, $fixe, $fax, $siret, $mail));
                echo "Client bien ajouté";
                header('Location: index.php'); 
            }else{
                echo "Erreur, tout les champs ne sont pas compléter";
            }
        }
        
    }
    //--------------------------Ajout client---------------------//

        function addpro(){
            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");  

           
            $nom_p = isset($_POST['nom_p']) ? $_POST['nom_p'] : NULL;
            $ad_pro = isset($_POST['ad_projet']) ? $_POST['ad_projet'] : NULL;
            $Code = isset($_POST['CP']) ? $_POST['CP'] : NULL;
            $lieu = isset($_POST['lieu']) ? $_POST['lieu'] : NULL;
            $sec = isset($_POST['sec']) ? $_POST['sec'] : NULL;
            $com = isset($_POST['com']) ? $_POST['com'] : NULL;
            $cons = isset($_POST['cons']) ? $_POST['cons'] : NULL;
            $parce = isset($_POST['parce']) ? $_POST['parce'] : NULL;
            $terrain = isset($_POST['terrain']) ? $_POST['terrain'] : NULL;
            $alti = isset($_POST['alti']) ? $_POST['alti'] : NULL;
            $cada = isset($_POST['cada']) ? $_POST['cada'] : NULL;
           
            if(isset($_POST['b9'])){
                if(!empty($_POST['nom_p']) && !empty($_POST['ad_projet']) && !empty($_POST['CP']) && !empty($_POST['lieu']) && !empty($_POST['sec']) && !empty($_POST['cons']) && !empty($_POST['parce']) && !empty($_POST['cada']) && !empty($_POST['terrain']) && !empty($_POST['terrain']) && !empty($_POST['com'])){
                    $insert = $bdd->prepare("INSERT INTO projet(nom, adresse, CP, commune, lieu, sec, cada, parce, constru, terrain, altitude) VALUE(?,?,?,?,?,?,?,?,?,?,?)");
                    $insert->execute(array($nom_p, $ad_pro, $Code, $com, $lieu, $sec, $cada, $parce, $cons, $terrain, $alti));
                    echo "Projet bien ajouté !";
                }else{
                    echo "Erreur, tout les champs ne sont pas compléter";
                }
            }
            

        }

        function addpiece(){
            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");

            $hauteur = isset($_POST['hauteur']) ? $_POST['hauteur'] : NULL;
            $largeur = isset($_POST['largeur']) ? $_POST['largeur'] : NULL;
            $nomp = isset($_POST['nomPiece']) ? $_POST['nomPiece'] : NULL;
            $surface = isset($_POST['surface']) ? $_POST['surface'] : NULL;
            $Code_Logement = isset($_POST['Code_Logement']) ? $_POST['Code_Logement']: NULL;
            $select = isset($_POST['catg']) ? $_POST['catg'] : NULL;
            $select1 = isset($_POST['c1']) ? $_POST['c1'] : NULL;
            $select2 = isset($_POST['c2']) ? $_POST['c2'] : NULL;
            $select3 = isset($_POST['c3']) ? $_POST['c3'] : NULL;
    

            if(!empty($_POST['nomPiece']) && !empty($_POST['hauteur']) && !empty($_POST['surface']) && !empty($_POST['largeur']) && !empty($_POST['Code_Logement'])){
                if($select == "Battante" && $select1 == "Fenêtre"){
                    $tot = 0.87;
                    $res = $hauteur * $largeur / $tot;
                    $poro = number_format($res, 2);
                    $insert = $bdd->prepare("INSERT INTO piece (nom, hauteur, largeur, menuiserie, surface, type_menuiserie, porosite, Code_Logement) VALUE(?,?,?,?,?,?,?,?)");
                    $insert->execute(array($nomp, $hauteur, $largeur, $select, $surface ,$select1,$poro, $Code_Logement));
                    echo "Logement bien ajouté";
                }else if($select == "Battante" && $select1 == "Porte-fenêtre"){
                    $tot = 0.94;
                    $res = $hauteur * $largeur / $tot;
                    $poro = number_format($res, 2);
                    $insert = $bdd->prepare("INSERT INTO piece (nom, hauteur, largeur, menuiserie, surface, type_menuiserie, porosite, Code_Logement) VALUE(?,?,?,?,?,?,?,?)");
                    $insert->execute(array($nomp, $hauteur, $largeur, $select, $surface ,$select1,$poro, $Code_Logement));
                    echo "Logement bien ajouté";
                }else if($select == "battante" && $select == "Porte-pallière"){
                    $tot = 0.94;
                                        $res = $hauteur * $largeur / $tot;
                    $poro = number_format($res, 2);
                    $insert = $bdd->prepare("INSERT INTO piece (nom, hauteur, largeur, menuiserie, surface, type_menuiserie, porosite, Code_Logement) VALUE(?,?,?,?,?,?,?,?)");
                    $insert->execute(array($nomp, $hauteur, $largeur, $select, $surface ,$select1,$poro, $Code_Logement));
                    echo "Logement bien ajouté";
                }else if($select == "Coulissante" && $select2 == "Porte-fenêtre 2 vantaux"){
                    $tot = 0.47;
                    $res = $hauteur * $largeur / $tot;
                    $poro = number_format($res, 2);
                    $insert = $bdd->prepare("INSERT INTO piece (nom, hauteur, largeur, menuiserie, surface, type_menuiserie, porosite, Code_Logement) VALUE(?,?,?,?,?,?,?,?)");
                    $insert->execute(array($nomp, $hauteur, $largeur, $select, $surface ,$select2,$poro, $Code_Logement));
                    echo "Logement bien ajouté";
                }else if($select == "Coulissante" && $select2 == "Porte-fenêtre 3 vantaux"){
                    $tot = 0.62;
                    $res = $hauteur * $largeur / $tot;
                    $poro = number_format($res, 2);
                    $insert = $bdd->prepare("INSERT INTO piece (nom, hauteur, largeur, menuiserie, surface, type_menuiserie, porosite, Code_Logement) VALUE(?,?,?,?,?,?,?,?)");
                    $insert->execute(array($nomp, $hauteur, $largeur, $select, $surface ,$select2,$poro, $Code_Logement));
                    echo "Logement bien ajouté";
                }else if($select == "Coulissante" && $select2 == "Porte-fenêtre 4 vantaux"){
                    $tot = 0.70;
                    $res = $hauteur * $largeur / $tot;
                    $poro = number_format($res, 2);
                    $insert = $bdd->prepare("INSERT INTO piece (nom, hauteur, largeur, menuiserie, surface, type_menuiserie, porosite, Code_Logement) VALUE(?,?,?,?,?,?,?,?)");
                    $insert->execute(array($nomp, $hauteur, $largeur, $select, $surface ,$select2,$poro, $Code_Logement));
                    echo "Logement bien ajouté";
                }else if($select == "Escamotable" && $select3 == "Galandage"){
                    $tot = 1;
                    $res = $hauteur * $largeur / $tot;
                    $poro = number_format($res, 2);
                    $insert = $bdd->prepare("INSERT INTO piece (nom, hauteur, largeur, menuiserie, surface, type_menuiserie, porosite, Code_Logement) VALUE(?,?,?,?,?,?,?,?)");
                    $insert->execute(array($nomp, $hauteur, $largeur, $select, $surface, $select3,$poro, $Code_Logement));
                    echo "Logement bien ajouté";
                }else if($select == "Escamotable" && $select3 == "Applique"){
                    $tot = 1;
                    $res = $hauteur * $largeur / $tot;
                    $poro = number_format($res, 2);
                    $insert = $bdd->prepare("INSERT INTO piece (nom, hauteur, largeur, menuiserie, surface, type_menuiserie, porosite, Code_Logement) VALUE(?,?,?,?,?,?,?,?)");
                    $insert->execute(array($nomp, $hauteur, $largeur, $select, $surface ,$select3,$poro, $Code_Logement));
                    echo "Logement bien ajouté";
                }else if($select == "Escamotable" && $select3 == "Fenêtre 2 vantaux"){
                    $tot = 0.44;
                    $res = $hauteur * $largeur / $tot;
                    $poro = number_format($res, 2);
                    $insert = $bdd->prepare("INSERT INTO piece (nom, hauteur, largeur, menuiserie, surface, type_menuiserie, porosite, Code_Logement) VALUE(?,?,?,?,?,?,?,?)");
                    $insert->execute(array($nomp, $hauteur, $largeur, $select, $surface ,$select3,$poro, $Code_Logement));
                    echo "Logement bien ajouté";
                }else if($select == "Soufflet"){
                    $void = "/";
                    $tot = 0.70;
                    $res = $hauteur * $largeur / $tot;
                    $poro = number_format($res, 2);
                    $insert = $bdd->prepare("INSERT INTO piece (nom, hauteur, largeur, menuiserie, surface, type_menuiserie, porosite, Code_Logement) VALUE(?,?,?,?,?,?,?,?)");
                    $insert->execute(array($nomp, $hauteur, $largeur, $select, $surface , $void ,$poro, $Code_Logement));
                    echo "Logement bien ajouté";
                }else if($select == "jalousie"){
                    $void = "/";
                    $tot = 0.87;
                    $res = $hauteur * $largeur / $tot;
                    $poro = number_format($res, 2);
                    $insert = $bdd->prepare("INSERT INTO piece (nom, hauteur, largeur, menuiserie, surface, type_menuiserie, porosite, Code_Logement) VALUE(?,?,?,?,?,?,?,?)");
                    $insert->execute(array($nomp, $hauteur, $largeur, $select, $surface ,$void,$poro, $Code_Logement));
                    echo "Logement bien ajouté";
                }else if($select == "Orientable"){
                    $void = "/";
                    $tot = 0.87;
                    $res = $hauteur * $largeur / $tot;
                    $poro = number_format($res, 2);
                    $insert = $bdd->prepare("INSERT INTO piece (nom, hauteur, largeur, menuiserie, surface, type_menuiserie, porosite, Code_Logement) VALUE(?,?,?,?,?,?,?,?)");
                    $insert->execute(array($nomp, $hauteur, $largeur, $select, $surface ,$void,$poro, $Code_Logement));
                    echo "Logement bien ajouté";
                }else if($select == "fixe"){
                    $void = "/";
                    $poro = "/";
                    $insert = $bdd->prepare("INSERT INTO piece (nom, hauteur, largeur, menuiserie, surface, type_menuiserie, porosite, Code_Logement) VALUE(?,?,?,?,?,?,?,?)");
                    $insert->execute(array($nomp, $hauteur, $largeur, $select, $surface ,$void,$poro, $Code_Logement));
                    echo "Logement bien ajouté";
                } 
            }else{
                echo "Erreur, veuillez compléter tout les champs"; 
            }
        }



        function addlogement(){
            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
            
            $codeClient = isset($_POST['Code_Client']) ? $_POST['Code_Client']: NULL;
            $nomLogement = isset($_POST['nomLogement']) ? $_POST['nomLogement'] : NULL;
            $codeProjet = isset($_POST['codeProjet']) ? $_POST['codeProjet'] : NULL;

            if(!empty($_POST['Code_Client']) && !empty($_POST['nomLogement'])){
                $insert = $bdd->prepare("INSERT INTO logement (nom, Code_Client, Code_projet) VALUE(?,?,?)");
                $insert->execute(array($nomLogement, $codeClient, $codeProjet));
                if($insert == true){
                    echo "Logement bien ajouté";
                }else{
                    echo "Erreur";
                }
            }else{
                echo "Erreur, champ manquant";
            } 

        }

        function delLogement($idLogement){
            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
            $requ = $bdd->prepare('DELETE FROM logement WHERE id = ?');
            $requ->execute(array($idLogement));
            $clientData = $requ->fetchAll();

            return $clientData;
        }

        function addprojetclient(){
            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");  

            $nom_p = isset($_POST['nom_p']) ? $_POST['nom_p'] : NULL;
            $ad_pro = isset($_POST['ad_projet']) ? $_POST['ad_projet'] : NULL;
            $Code = isset($_POST['CP']) ? $_POST['CP'] : NULL;
            $lieu = isset($_POST['lieu']) ? $_POST['lieu'] : NULL;
            $sec = isset($_POST['sec']) ? $_POST['sec'] : NULL;
            $com = isset($_POST['com']) ? $_POST['com'] : NULL;
            $cons = isset($_POST['cons']) ? $_POST['cons'] : NULL;
            $parce = isset($_POST['parce']) ? $_POST['parce'] : NULL;
            $terrain = isset($_POST['terrain']) ? $_POST['terrain'] : NULL;
            $alti = isset($_POST['alti']) ? $_POST['alti'] : NULL;
            $cada = isset($_POST['cada']) ? $_POST['cada'] : NULL;
            $codeClient = isset($_POST['Code_Client']) ? $_POST['Code_Client']: NULL;

            if(!empty($_POST['nom_p']) && !empty($_POST['Code_Client']) && !empty($_POST['ad_projet']) && !empty($_POST['CP']) && !empty($_POST['lieu']) && !empty($_POST['sec']) && !empty($_POST['cons']) && !empty($_POST['parce']) && !empty($_POST['cada']) && !empty($_POST['terrain']) && !empty($_POST['terrain']) && !empty($_POST['com'])){
                $insert = $bdd->prepare("INSERT INTO projet(nom, adresse, CP, commune, lieu, sec, cada, parce, constru, terrain, altitude, Code_Client) VALUE(?,?,?,?,?,?,?,?,?,?,?,?)");
                $insert->execute(array($nom_p, $ad_pro, $Code, $com, $lieu, $sec, $cada, $parce, $cons, $terrain, $alti, $codeClient));
                if($insert == true){
                    echo "<span class='text-success'>Projet bien ajouté au client</span>";
                }else{
                    echo "<span class='text-danger'>Erreur lors de la création du projet</span>";
                }
            }else{
                echo "<span class='text-warning'>Erreur, tout les champs ne sont pas compléter</span>";
            }
        }




        


    //-------------------------afficher client----------------------//
    function affiche_client(){
        $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", ""); 
        $reponse = $bdd->query('SELECT * FROM client');
    
        echo '<table class="tableau2">';
        echo'<tr><th class="thre">Client</th></tr>';
        while($donnees = $reponse->fetch()){
            echo '<tr>';
                 echo '<td class="c1"><button>'.$donnees['prenom'].'</button></td>';
            echo '</tr>';
        }
            echo '</table>';
         
    }

    function getClients(){
        $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
        $reponse = $bdd->query('SELECT * FROM client');

        return $donnees = $reponse->fetchAll();
    }

    function getClientInfo($id){
        $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
        $requ = $bdd->prepare('SELECT * FROM client WHERE id = ?');
        $requ->execute(array($id));
        $clientData = $requ->fetchAll();

        return $clientData;
    }


    function getProjets(){
        $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
        $reponse = $bdd->query('SELECT * FROM projet');

        return $donnees = $reponse->fetchAll();
    }

        function delClient($id){
            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
            $requ = $bdd->prepare('DELETE FROM client WHERE id = ?');
            $requ->execute(array($id));
            $clientData = $requ->fetchAll();

            return $clientData;
        }

        function modifClient($clientData){
            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
            $requ = $bdd->prepare('UPDATE client SET nom=?,prenom=?,adresse=?,date_de_naissance=?,tel=?,tel_fixe=?,fax=?,siret=?,mail=? WHERE id = ?');
            $requ->execute(array(
                $clientData['nom'],
                $clientData['prenom'],
                $clientData['adresse'],
                $clientData['date'],
                $clientData['tel'],
                $clientData['fixe'],
                $clientData['fax'],
                $clientData['siret'],
                $clientData['mail'],
                $clientData['id']
            ));
        }


        function getProjet($idClient){
            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
            $requ = $bdd->prepare('SELECT * FROM projet WHERE ? = projet.Code_Client');
            $requ->execute(array($idClient));
            $projetData = $requ->fetchAll();

            return $projetData;
        }

        function getProjetInfo($idProjet){
            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
            $requ = $bdd->prepare('SELECT * FROM projet WHERE id = ?');
            $requ->execute(array($idProjet));
            $projetData = $requ->fetchAll();

            return $projetData;
        }

        function delProjet($idProjet){
            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
            $requ = $bdd->prepare('DELETE FROM projet WHERE id = ?');
            $requ->execute(array($idProjet));
            var_dump($requ->errorInfo());
        }

        function modifProjet($projetData){

            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
            $requ = $bdd->prepare('UPDATE projet SET nom=?,adresse=?,terrain=?,commune=?,CP=?,lieu=?,sec=?,cada=?,parce=?,constru=?,altitude=? WHERE id = ?');
            $requ->execute(array(
                $projetData['nom'],
                $projetData['ad_projet'],
                $projetData['terrain'],
                $projetData['com'],
                $projetData['CP'],
                $projetData['lieu'],
                $projetData['sec'],
                $projetData['cada'],
                $projetData['parce'],
                $projetData['cons'],
                $projetData['alti'],
                $projetData['idProjet']
            ));

        }

        function getlogement($idClient){
            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
            $requ = $bdd->prepare('SELECT * FROM logement WHERE Code_Client = ?');
            $requ->execute(array($idClient));
            $LogementData = $requ->fetchAll();

            return $LogementData;

        }


        function getLogementsFromProjet($idProjet){
            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
            $requ = $bdd->prepare('SELECT * FROM logement WHERE Code_projet = ?');
            $requ->execute(array($idProjet));
            $LogementsData = $requ->fetchAll();

            return $LogementsData;

        }


        function getListePiece($idLogement){
            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
            $requ = $bdd->prepare('SELECT * FROM piece WHERE Code_Logement = ?');
            $requ->execute(array($idLogement));
            $piecesData = $requ->fetchAll();

            return $piecesData;

        }

        function getPiece($idPiece){
            $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
            $requ = $bdd->prepare('SELECT * FROM piece WHERE id = ?');
            $requ->execute(array($idPiece));
            $pieceData = $requ->fetchAll();

            return $pieceData;

        }


            function delPiece($idPiece){
                $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
                $requ = $bdd->prepare('DELETE FROM piece WHERE id = ?');
                $requ->execute(array($idPiece));
                var_dump($requ->errorInfo());
            }

            function modifPiece($pieceData){

                $bdd = new PDO('mysql:host=localhost;dbname=archi;charset=utf8', "root", "");
                $requ = $bdd->prepare('UPDATE piece SET nom=?,hauteur=?,largeur=?,menuiserie=?,type_menuiserie=? WHERE id = ?');
                $requ->execute(array(
                    $pieceData['nom'],
                    $pieceData['hauteur'],
                    $pieceData['largeur'],
                    $pieceData['menuiserie'],
                    $pieceData['type_menuiserie'],
                    $pieceData['id']
                ));

                var_dump($requ->errorInfo());

            }

     //-------------------------afficher client----------------------//



?>