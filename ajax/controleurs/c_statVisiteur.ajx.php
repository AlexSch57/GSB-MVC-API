<?php

$action = $_POST["action"];
$id_visiteur = $_SESSION["idVisiteur"];
switch ($action) {
    case'voirStatVisiteur': {
            $levisiteur = intval($_POST["lstVisiteur"]);
            $lesFraisAnnuels = $pdo->getLesFraisAnnuels($id_visiteur, $lAnnee);
            include("vues/v_statVisiteur.ajx.php");
        }
}
?>

