<div id="accueil">
    <h2>Gestion des frais<small> - Visiteur : <?php echo $_SESSION['prenom'] . " " . $_SESSION['nom'] ?></small></h2>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-bookmark"></span> Navigation</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <a href="index.php?uc=gererFrais&action=saisirFrais" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-plus-sign"></span> <br/>Saisir fiche de frais</a>
                        <a href="index.php?uc=etatFrais&action=selectionnerMois" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Mes fiches de frais</a>
                        <a href="index.php?uc=statAnnee&action=selectionnerAnnee" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Statistiques annuelles</a>
                        <a href="index.php?uc=statFrais&action=selectionnerAnneeFrais" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Frais remboursé par années et catégories</a>
                        <?php if ($_SESSION["idVisiteur"] == directeur) { ?>
                            <a href="index.php?uc=statVisiteur&action=selectionnerVisiteur" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Statistiques par visiteur</a>
                            <a href="index.php?uc=statFrais&action=selectionnerFrais" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Statistiques par frais</a>
                        <?php } ?>
                        <a href="index.php?uc=tableauTotal" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Tableau de bord total</a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
