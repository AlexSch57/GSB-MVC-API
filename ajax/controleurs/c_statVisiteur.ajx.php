<?php

$action = $_POST["action"];
$id_visiteur = $_SESSION["idVisiteur"];
switch ($action) {
    case'voirStatVisiteur': {
            $leVisiteur = ($_POST["lstVisiteur"]);
            $lesAnneesDisponibles = $pdo->getLesAnneesDisponibles($id_visiteur);
            include("vues/v_statVisiteur.ajx.php");
        }
}
?>

