<h2>Les Frais</h2>

<div class="row">
    <div class="col-md-8">
        <h3>Sélectionner un type de Frais : </h3>
    </div>
    <div class="col-md-8">
        <form action="index.php?uc=statFrais&action=selectionnerFrais" method="post" role="form">
            <div class="form-group">
                <label for="lstFrais" accesskey="n">Frais : </label>
                <select id="lstFrais" name="lstFrais" class="form-control">
                    <?php
                    foreach ($nomForfait as $unForfait) {
                        $id = $unForfait->id;//['id'];
                        $forfait = $unForfait->libelle;//['libelle'];
                        ?>
                        <option selected value="<?php echo $id ?>"><?php echo $forfait ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input id="ok" type="submit" value="Valider" class="btn btn-success" role="button" onclick="afficherStatFrais();return false"/>
                <input id="annuler" type="reset" value="Effacer" class="btn btn-danger pull-right" role="button" />
            </div>
        </form>
        <div id="zoneStat">
        </div>
    </div>
</div>
