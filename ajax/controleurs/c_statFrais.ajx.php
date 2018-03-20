<?php

$action = $_POST["action"];
$id_visiteur = $_SESSION["idVisiteur"];
switch ($action) {
    case'voirStatFrais': {
            $leFrais = ($_POST["lstFrais"]);
            $lesFrais = getAPI('lesfrais/'.$leFrais);
            include("vues/v_statFrais.ajx.php");
        }
}
?>

