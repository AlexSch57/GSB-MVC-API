<div class="panel panel-info">
    <div class="panel-heading">
        Totale remboursement de frais pour l'année <?php echo($lAnnee) ?> :
    </div>
    <table class="table table-bordered table-responsive">
        <tr>
            <th class="date">Mois</th>
            <th class='montant'>Montant</th>                
        </tr>
        <?php
        foreach ($lesFraisAnnuels as $uneAnnee) {
            $annee = getMonth(intval($uneAnnee->month),1);
            $montant = $uneAnnee->montant;
            ?>
            <tr>
                <td><?php echo $annee ?></td>
                <td><?php echo number_format($montant, 2, ',', ' ')  ?> €</td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>