<?php
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch ($action) {
    case 'voirStatAnneeFraisFor': {
            $lAnnee = $_POST['lstAnnee'];
            $lesTypesFraisForfait = $pdo->getLesTypesFraisForfait();
            $lesFraisForAnnee = $pdo->getStatAnneeFraisFor($lAnnee);
            include("vues/v_statAnneeFraisFor.ajx.php");
        }
}
?>