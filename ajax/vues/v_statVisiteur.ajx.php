<div class="panel panel-info" class="col-md-12">
    <div class="panel-heading" class="col-md-12">
        Totale remboursement de frais pour le visiteur <?php echo($nomVisiteur)?> :
    </div>
    <table class="table table-bordered table-responsive">
        <tr>
            <th class="date">Annee</th>
            <th class='montant'>Montant</th>      
            <th class="forfait">Forfait</th>
            <th class="horsForfait">Hors forfait</th>
        </tr>
        <?php
        foreach($lesFraisDuVisiteur as $uneAnnee) {
            $annee = $uneAnnee['annee'];
            $fraisForfait = $uneAnnee['mtForfait'];
            $fraisHorsForfait = $uneAnnee['mtHorsforfait'];
            $total = $fraisForfait + $fraisHorsForfait;
            
            if($total != 0)
            {
            ?>
                <tr>
                <td><?php echo $annee ?></td>
                <td><?php echo $total ?></td>
                <td><?php echo $fraisForfait ?></td>
                <td><?php echo $fraisHorsForfait ?></td>
            </tr>
            <?php
            }
        }
        
        //$lesFraisAnnuels = $pdo->getMontantFraisAnnuels($leVisiteur);
        //$lesFraisHorsForfait = $pdo->getMontantFraisHorsForfaitAnnuels($leVisiteur);
        
        //$lol = $pdo->getLesFraisDuVisiteur($leVisiteur);
        
       
        /*
      //  foreach($lesFraisAnnuels as $uneAnnee) {
        //    if($uneAnnee['montant'] != 0) {
       //     ?>
            <tr>
                <td><?php echo $uneAnnee['annee'] ?></td>
                <td><?php echo $uneAnnee['montant'] ?></td>
            </tr>
            <?php
            }
        }
        
        foreach($lesFraisHorsForfait as $uneAnnee) {
            echo $uneAnnee['horsforfait'];
        }
        
        foreach ($lesAnneesDisponibles as $uneAnnee) {
            $annee = $uneAnnee['annee'];

            
            
            $lesFraisForfaitAnnuels = $pdo->getMontantFraisForfaitAnnuels($leVisiteur, $annee);
            $fraisForfait = $lesFraisForfaitAnnuels[0][2];


            
            if($frais != 0)
            {
            ?>
            <tr>
                <td><?php echo $annee ?></td>
                <td><?php echo $frais ?></td>
                <td><?php echo $fraisForfait ?></td>
                <td><?php echo $fraisHorsForfait ?></td>
            </tr>
            <?php
            }
        }
         
         */
        ?>
    </table>
</div>


