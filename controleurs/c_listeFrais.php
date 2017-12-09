<?php

$action = $_REQUEST["action"];
$id_visiteur = $_SESSION["idVisiteur"];
switch ($action) {
    case'selectionnerFrais': {
            $lesVisiteurs = $pdo->getLesVisiteursDisponibles();
            $nomForfait = $pdo->getNomForfait();
            include("vues/v_listeFrais.php");
        }
}
?>