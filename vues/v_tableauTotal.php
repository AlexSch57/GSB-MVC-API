<h2>Mes totaux des montants de mes notes de frais</h2>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-responsive">
            <tr>
                <th class="annee">Année</th>
                <th class='total'>Montant total</th>  
                <th class='montantf'>Montant forfait</th>
                <th class='montanthf'>Montant hors forfait</th>
            </tr>
            <?php
            foreach ($lesFraisTotal as $unFrais) {
                $annee = $unFrais['annee'];
                $forfait = $unFrais['mtForfait'];
                $horsForfait = $unFrais['mtHorsforfait'];
                ?>
                <tr>
                    <td><?php echo $annee; ?></td>
                    <td><?php echo $forfait + $horsForfait; ?></td>
                    <td><?php echo $forfait; ?></td>
                    <td><?php echo $horsForfait; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>

