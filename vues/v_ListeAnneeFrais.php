<h2>Statistiques par type de frais remboursés</h2>

<div class="row">
    <div class="col-md-8">
        <h3>Sélectionner une année : </h3>
    </div>
    <div class="col-md-8">
        <form action="index.php?uc=statAnneeFrais&action=selectionnerAnneeFrais" method="post" role="form">
            <div class="form-group">
                <label for="lstAnneeFrais" accesskey="n">Année : </label>
                <select id="lstAnneeFrais" name="lstAnneeFrais" class="form-control">
                    <?php
                    foreach ($lesAnneesFrais as $uneAnnee) {
                        $annee = $uneAnnee['annee'];
                        ?>
                        <option selected value="<?php echo $annee ?>"><?php echo $annee ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input id="ok" type="submit" value="Valider" class="btn btn-success" role="button" onclick="afficherStatAnneeFrais();return false"/>
                <input id="annuler" type="reset" value="Effacer" class="btn btn-danger pull-right" role="button" />
            </div>
        </form>
        <div id="zoneStat">
        </div>
    </div>
</div>
