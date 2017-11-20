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
            //$montant = $uneAnnee['montant'];
            ?>
            <tr>
                <td><?php echo $annee ?></td>
                <td><?php echo "lol" ?></td>
                <td><?php echo "lol" ?></td>
                <td><?php echo "lol" ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>


