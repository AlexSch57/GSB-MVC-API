function afficherStatAnnee()
{
    $(document).ready(function(){
            $.post(
                    'ajax/_indexAjax.php', // url du script à executer
                    {
                            // Données envoyées
                            uc:'statAnnee',
                            action:'voirStatAnnee',
                            lstAnnee:$("#lstAnnee").val(),
                    },
                    // Fonction pour gérer le retour
                    function(data){
                            $("#zoneStat").html(data);
                    },
                    'text' // Format de retour : texte HTML
            );
    });
}

function afficherStatVisiteur()
{
    $(document).ready(function(){
            $.post(
                    'ajax/_indexAjax.php', // url du script à executer
                    {
                            // Données envoyées
                            uc:'statVisiteur',
                            action:'voirStatVisiteur',
                            lstVisiteur:$("#lstVisiteur").val(),
                    },
                    // Fonction pour gérer le retour
                    function(data){
                            $("#zoneStat").html(data);
                    },
                    'text' // Format de retour : texte HTML
            );
    });
}

function afficherStatAnneeFrais()
{
    $(document).ready(function(){
            $.post(
                    'ajax/_indexAjax.php', // url du script à executer
                    {
                            // Données envoyées
                            uc:'statAnneeFrais',
                            action:'voirStatAnneeFrais',
                            lstAnneeFrais:$("#lstAnneeFrais").val(),
                    },
                    // Fonction pour gérer le retour
                    function(data){
                            $("#zoneStat").html(data);
                    },
                    'text' // Format de retour : texte HTML
            );
    });
}

