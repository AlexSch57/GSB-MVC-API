<?php
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch ($action) {
    case 'selectionnerAnneeFraisFor': {
            $lesAnnees = $pdo->getLesAnneesFraisFor();
            $lesAnnees = getAPI('lesanneesfraisfor');
            // Afin de sélectionner par défaut la dernière année dans la zone de liste
            // on  prend la première,
            // les années étant triés par ordre décroissant
            $anneeASelectionner = $lesAnnees[0];
            include("vues/v_listeAnneesFraisFor.php");
            break;
        }
}
?>