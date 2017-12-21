<div class="panel panel-info" class="col-md-12">
    <div class="panel-heading" class="col-md-12">
        Total des frais par visiteur pour le type <?php echo($leFrais)?> :
    </div>
    <table class="table table-bordered table-responsive">
        <tr>
            <th class="date">Visiteur</th>
            <th class='montant'>Montant <?php echo($leFrais)?></th>      
        </tr>
        <?php
        foreach($lesFrais as $unFrais) {
            $nomVisiteur = $unFrais['nom'];
            $frais = $unFrais['montant'];
            ?>
                <tr>
                <td><?php echo $nomVisiteur ?></td>
                <td><?php echo number_format($frais, 2, ',', ' ')  ?> €</td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>


