<?php
$action = $_POST["action"];
$id_visiteur = $_SESSION["idVisiteur"];
switch($action)
{
    case'voirStatAnnee':{
        $lAnnee = intval($_POST["lstAnnee"]);
        $lesFraisAnnuels = $pdo->getLesFraisAnnuels($id_visiteur,$lAnnee);
        include("vues/v_statAnnee.ajx.php");
    }
}
?>

