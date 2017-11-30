<div class="panel panel-info">
    <div class="panel-heading">
        Totale remboursement de frais pour l'année <?php echo($lAnneeFrais) ?> :
    </div>
    <table class="table table-bordered table-responsive">
        <?php 
        /*
        <tr>
        
            <th class="date">Mois</th>
            <th class='montant'><?php echo $nomForfait[0][0] ?></th>  
            <th class='montant'><?php echo $nomForfait[1][0] ?></th>   
            <th class='montant'><?php echo $nomForfait[2][0] ?></th>   
            <th class='montant'><?php echo $nomForfait[3][0] ?></th>   
        </tr>
         code pour avoir le tableau dans l'autre sens, avec l'appel du nom du forfait par rapport à la base de donnée
         */
        ?>
        <tr>
            <th class="date">Mois</th>
            <th class='montant'>Nom du forfait</th>  
            <th class='montant'>Total</th>     
        </tr>
        <?php
        foreach ($lesFraisAnnuelsParCategorie as $unMois) {
            $mois = getMonth(intval($unMois['mois']),1);
            $libelle = $unMois[1];
            $montantFraisForfait = $unMois[2];
           
            ?>
            <tr>
                <td><?php echo $mois ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montantFraisForfait ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>