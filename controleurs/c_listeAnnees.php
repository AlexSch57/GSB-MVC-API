<?php
$action = $_REQUEST["action"];
$id_visiteur = $_SESSION["idVisiteur"];
switch ($action) {
    case'selectionnerAnnee': {
            $lesAnnees = $pdo->getLesAnneesDisponibles($id_visiteur);
            include("vues/v_listeAnnee.php");
        }
}

?>