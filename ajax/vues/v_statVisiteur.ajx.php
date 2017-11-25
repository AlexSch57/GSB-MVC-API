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
        foreach ($lesAnneesDisponibles as $uneAnnee) {
            $annee = $uneAnnee['annee'];

            // création et vérification des frais annuels
            $lesFraisAnnuels = $pdo->getMontantFraisAnnuels($leVisiteur, $annee);
            $frais = $lesFraisAnnuels;
            
            // création et vérification des frais dans le forfaits
            $lesFraisForfaitAnnuels = $pdo->getMontantFraisForfaitAnnuels($leVisiteur, $annee);
            $fraisForfait = $lesFraisForfaitAnnuels[0][2];

            // création et vérification des frais hors forfaits
            $lesFraisHorsForfaitAnnuels = $pdo->getMontantFraisHorsForfaitAnnuels($leVisiteur, $annee);
            $fraisHorsForfait = $lesFraisHorsForfaitAnnuels;
            
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
        ?>
    </table>
</div>


