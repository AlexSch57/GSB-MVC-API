<hr>
<div class="panel panel-primary">
    <div class="panel-heading">Fiche de frais du mois <?php echo $numMois . "-" . $numAnnee ?> : </div>
    <div class="panel-body">
        <strong><u>Etat :</u></strong> <?php echo $libEtat ?> depuis le <?php echo $dateModif ?> <br> 
        <strong><u>Montant validé :</u></strong> <?php echo number_format($montantValide, 2, ',', ' ').' €' ?>
    </div>
</div>
<div class="panel panel-info">
    <div class="panel-heading">Eléments forfaitisés</div>
    <table class="table table-bordered table-responsive">
        <tr>
            <?php
            foreach ($lesFraisForfait as $unFraisForfait) {
                $libelle = $unFraisForfait->libelle;//['libelle'];
                ?>	
                <th> <?php echo htmlspecialchars($libelle)  ?></th>
                <?php
            }
            ?>
        </tr>
        <tr>
            <?php
            foreach ($lesFraisForfait as $unFraisForfait) {
                $quantite = $unFraisForfait->quantite;//['quantite'];
                ?>
                <td class="qteForfait"><?php echo number_format($quantite, 2, ',', ' '). ' €' ?> </td>
                <?php
            }
            ?>
        </tr>
    </table>
</div>
<div class="panel panel-info">
    <div class="panel-heading">Descriptif des éléments hors forfait - <?php echo $nbJustificatifs ?> justificatif(s) reçu(s)</div>
    <table class="table table-bordered table-responsive">
        <tr>
            <th class="date">Date</th>
            <th class="libelle">Libellé</th>
            <th class='montant'>Montant</th>                
        </tr>
        <?php
        foreach ($lesFraisHorsForfait as $unFraisHorsForfait) {
            $date = $unFraisHorsForfait->date;
            $libelle = htmlspecialchars($unFraisHorsForfait->libelle);
            $montant = $unFraisHorsForfait->montant;
            ?>
            <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo number_format($montant, 2, ',', ' ').' €'?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>