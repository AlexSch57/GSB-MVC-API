<?php
session_start();
require_once("../include/fct.inc.php");
require_once ("../include/class.pdogsb.inc.php");
$pdo = PdoGsb::getPdoGsb();

// Verifier qu'un utilisateur est connecté
if (estConnecte() && isset($_POST['uc'])) {
    $uc = $_POST['uc'];
    
    switch ($uc) {
        case 'statAnnee': {
            include("controleurs/c_statAnnee.ajx.php");
            break;
        }
        case 'statVisiteur': {
            include("controleurs/c_statVisiteur.ajx.php");
            break;
        }
        case 'statFrais': {
            include("controleurs/c_statFrais.ajx.php");
            break;
        }
        case 'statAnneeFraisFor': {
            include("controleurs/c_statAnneeFraisFor.ajx.php");
            break;
        }
    }
}
?>
