<?php

$action = $_POST["action"];
$id_visiteur = $_SESSION["idVisiteur"];
switch ($action) {
    case'voirStatVisiteur': {
            $leVisiteur = ($_POST["lstVisiteur"]);
            $nomVisiteur = getAPI('nomprenomvisiteurparids/'.$leVisiteur);
            $lesFraisDuVisiteur = getAPI('lesfraisduvisiteurs/'.$leVisiteur);
            include("vues/v_statVisiteur.ajx.php");
        }
}
?>

