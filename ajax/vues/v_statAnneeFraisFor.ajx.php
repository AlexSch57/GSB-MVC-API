<hr>
<div class="panel panel-primary">
    <div class="panel-heading">Frais forfaitisés remboursés de l'année <?php echo $lAnnee ?> : </div>
</div>

<div class="panel panel-info">

    <table class="table table-bordered table-responsive">
        <tr>
            <th class="date">Mois</th>
            <?php
            $statMois = array();
            // initialisation tableau types de frais au forfait
            foreach ($lesTypesFraisForfait as $unTypeFraisForfait) {
                 $idTypeFrais = $unTypeFraisForfait["id"];
                 $statMois[$idTypeFrais] = 0;
            ?>
                <th class="libelle"><?php echo $unTypeFraisForfait["libelle"] ?></th>
            <?php
            }
            ?>
        </tr>
        <?php
        
        $moisCourant = $lesFraisForAnnee[0]['mois'];      
        foreach ($lesFraisForAnnee as $unMoisStat) {
            $mois = $unMoisStat['mois'];
            if ($mois != $moisCourant) {
                // afficher le mois 
                echo '<tr><td>'.$moisCourant.'</td>';
                foreach ($statMois as $unTypeFrais => $valeur) {
                    echo '<td>'.$valeur.'</td>';
                }
                echo '</tr>';
                // réinitialiser le tableau des types de frais au forfait à 0
                foreach ($lesTypesFraisForfait as $unTypeFraisForfait) {
                    $idTypeFrais = $unTypeFraisForfait["id"];
                    $statMois[$idTypeFrais] = 0;
                }
                $moisCourant = $mois;
                // renseigner le tableau
                $idFrais = $unMoisStat['idFraisForfait'];
                $statMois[$idFrais] =  $unMoisStat['totalFrais'];
            }
            else {
                // renseigner le tableau
                $idFrais = $unMoisStat['idFraisForfait'];
                $statMois[$idFrais] =  $unMoisStat['totalFrais'];
            }                          
        }
        // affichage du tableau du dernier mois
        echo '<tr><td>'.$moisCourant.'</td>';
        foreach ($statMois as $unTypeFrais => $valeur) {
            echo '<td>'.$valeur.'</td>';
        }
        echo '</tr>';
        ?>
    </table>
</div>