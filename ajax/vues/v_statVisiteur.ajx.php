<div class="panel panel-info" class="col-md-12">
    <div class="panel-heading" class="col-md-12">
        Totale remboursement de frais pour le visiteur <?php echo($leVisiteur) ?> :
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
            $lesFraisAnnuels = $pdo->getLesFraisAnnuels($leVisiteur, $annee);
            $frais = $lesFraisAnnuels[0][2];
            $lesFraisForfaitAnnuels = $pdo->getLesFraisForfaitAnnuels($leVisiteur, $annee);
            $fraisForfait = $lesFraisForfaitAnnuels[0][2];
            $lesFraisHorsForfaitAnnuels = $pdo->getLesFraisHorsForfaitAnnuels($leVisiteur, $annee);
            //$fraisHorsForfait = $lesFraisHorsForfaitAnnuels[0][2];
            var_dump($lesFraisHorsForfaitAnnuels);
            ?>
            <tr>
                <td><?php echo $annee ?></td>
                <td><?php echo $frais ?></td>
                <td><?php echo $fraisForfait ?></td>
                <td><?php echo "?" ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>


