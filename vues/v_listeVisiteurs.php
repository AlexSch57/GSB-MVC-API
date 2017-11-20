<h2>Les visiteurs</h2>

<div class="row">
    <div class="col-md-8">
        <h3>Sélectionner un visiteur : </h3>
    </div>
    <div class="col-md-8">
        <form action="index.php?uc=statVisiteur&action=selectionnerVisiteur" method="post" role="form">
            <div class="form-group">
                <label for="lstVisiteur" accesskey="n">Visiteur : </label>
                <select id="lstVisiteur" name="lstVisiteurs" class="form-control">

                    <?php
                    var_dump($lesVisiteurs);
                    foreach ($lesVisiteurs as $unVisiteur) {
                        $id = $unVisiteur['id'];
                        $visiteur = $unVisiteur['visiteur'];
                        ?>
                    <option selected value="<?php echo $id ?>"><?php echo $visiteur ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input id="ok" type="submit" value="Valider" class="btn btn-success" role="button" onclick="afficherStatVisiteur();return false"/>
                <input id="annuler" type="reset" value="Effacer" class="btn btn-danger pull-right" role="button" />
            </div>
        </form>
        <div id="zoneStat">
        </div>
    </div>
</div>
