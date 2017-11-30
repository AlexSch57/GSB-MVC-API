<?php

$action = $_REQUEST["action"];
$id_visiteur = $_SESSION["idVisiteur"];
switch ($action) {
    case'selectionnerAnneeFrais': {
            $lesAnneesFrais = $pdo->getLesAnneesFraisDisponibles($id_visiteur);
            include("vues/v_listeAnneeFrais.php");
        }
}
?>