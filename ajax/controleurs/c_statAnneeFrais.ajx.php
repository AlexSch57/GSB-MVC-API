<?php

$action = $_POST["action"];
$id_visiteur = $_SESSION["idVisiteur"];
switch ($action) {
    case'voirStatAnneeFrais': {
            $lAnneeFrais = intval($_POST["lstAnneeFrais"]);
            $nomForfait = $pdo->getNomForfait();
            $lesFraisAnnuelsParCategorie = $pdo->getLesFraisAnnuelsParCategorie($id_visiteur, $lAnneeFrais);
            include("vues/v_statAnneeFrais.ajx.php");
        }
}
?>

