<?php

$action = $_POST["action"];
$id_visiteur = $_SESSION["idVisiteur"];
switch ($action) {
    case'voirStatVisiteur': {
            $leVisiteur = ($_POST["lstVisiteur"]);
            $nomVisiteur = $pdo->getNomPrenomVisiteurParId($leVisiteur);
            $lesFraisDuVisiteur = $pdo->getLesFraisDuVisiteur($leVisiteur);
            $lesAnneesDisponibles = $pdo->getLesAnneesDisponibles($leVisiteur);
            include("vues/v_statVisiteur.ajx.php");
        }
}
?>

