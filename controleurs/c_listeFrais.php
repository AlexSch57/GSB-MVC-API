<?php

$action = $_REQUEST["action"];
$id_visiteur = $_SESSION["idVisiteur"];
switch ($action) {
    case'selectionnerFrais': {
            $lesVisiteurs = getAPI('lesvisiteursdisponibles');
            $nomForfait = getAPI('nomforfait');
            include("vues/v_listeFrais.php");
        }
}
?>