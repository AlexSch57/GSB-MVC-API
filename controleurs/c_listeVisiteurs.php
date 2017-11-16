<?php

$action = $_REQUEST["action"];
$id_visiteur = $_SESSION["idVisiteur"];
switch ($action) {
    case'selectionnerVisiteur': {
            $lesVisiteurs = $pdo->getLesVisiteursDisponibles();
            include("vues/v_listeVisiteurs.php");
        }
}
?>