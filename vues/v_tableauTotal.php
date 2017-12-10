<h2>Mes totaux des montants de mes notes de frais</h2>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-responsive">
            <tr>
                <th class="annee">Année</th>
                <th class='montanthf'>Montant hors forfait</th>
                <th class='montantf'>Montant forfait</th>
                <th class='total'>Montant total</th>  
            </tr>
            <?php
            foreach ($lesFraisTotal as $unFrais) {
                ?>
                <tr>
                    <td><?php echo $unFrais['annee']; ?></td>
                    <td><?php echo $unFrais['mtForfait']; ?></td>
                    <td><?php echo $unFrais['mtHorsforfait']; ?></td>
                    <td><?php echo $unFrais['mtForfait']+$unFrais['mtHorsforfait']; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>

