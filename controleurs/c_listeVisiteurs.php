<?php

$action = $_REQUEST["action"];
$id_visiteur = $_SESSION["idVisiteur"];
switch ($action) {
    case'selectionnerVisiteur': {
            $lesVisiteurs = getAPI('lesvisiteursdisponibles');
            include("vues/v_listeVisiteurs.php");
        }
}
?>