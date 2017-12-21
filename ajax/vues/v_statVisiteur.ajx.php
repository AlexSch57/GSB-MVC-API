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
            ?>
                <tr>
                <td><?php echo $annee ?></td>
                <td><?php echo number_format($total, 2, ',', ' ')  ?> €</td>
                <td><?php echo number_format($fraisForfait, 2, ',', ' ')  ?> €</td>
                <td><?php echo number_format($fraisHorsForfait, 2, ',', ' ')  ?> €</td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>


