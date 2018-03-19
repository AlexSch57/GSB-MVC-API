<?php
$action = $_REQUEST["action"];
$id_visiteur = $_SESSION["idVisiteur"];
switch ($action) {
    case'selectionnerAnnee': {
            $lesAnnees = getAPI('lesanneesdisponibles/'.$id_visiteur);
            include("vues/v_listeAnnees.php");
        }
}
?>
