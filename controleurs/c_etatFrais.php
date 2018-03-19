<?php
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch ($action) {
    case 'selectionnerMois': {
            $lesMois = getAPI('lesmoisdisponibles/'.$idVisiteur);
            //$lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
            // Afin de sélectionner par défaut le dernier mois dans la zone de liste
            // on demande toutes les clés, et on prend la première,
            // les mois étant triés décroissants
            if(!($lesMois))
            {
                $moisASelectionner = 0;
            }
            else
            {
                $moisASelectionner = reset($lesMois)->mois;
            }
            include("vues/v_listeMois.php");
            break;
        }
    case 'voirEtatFrais': {
            $leMois = $_REQUEST['lstMois'];
            $lesMois = getAPI('lesmoisdisponibles/'.$idVisiteur);
            $moisASelectionner = $leMois;
            include("vues/v_listeMois.php");
            $lesFraisHorsForfait = getAPI('lesfraishorsforfaits/'.$idVisiteur.'/mois/'.$leMois);
            $lesFraisForfait = getAPI('fraisforfaits/'.$idVisiteur.'/mois/'.$leMois);
            $lesInfosFicheFrais = getAPI('fichefrais/'.$idVisiteur.'/mois/'.$leMois);
            $numAnnee = substr($leMois, 0, 4);
            $numMois = substr($leMois, 4, 2);
            $libEtat = $lesInfosFicheFrais->libEtat;
            $montantValide = $lesInfosFicheFrais->montantValide;
            $nbJustificatifs = $lesInfosFicheFrais->nbJustificatifs;
            if($nbJustificatifs == 0) {
                $nbJustificatifs = "aucun";
            }
            $dateModif = $lesInfosFicheFrais->dateModif;
            $dateModif = dateAnglaisVersFrancais($dateModif);
            include("vues/v_etatFrais.php");
        }
}
?>