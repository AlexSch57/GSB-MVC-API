<?php
$idVisiteur = $_SESSION["idVisiteur"];
$lesFraisTotal = $pdo->getLesFraisTotal($idVisiteur);

include("vues/v_tableauTotal.php");
?>
