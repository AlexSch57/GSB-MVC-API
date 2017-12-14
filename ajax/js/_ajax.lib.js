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

function afficherStatFrais()
{
    $(document).ready(function(){
            $.post(
                    'ajax/_indexAjax.php', // url du script à executer
                    {
                            // Données envoyées
                            uc:'statFrais',
                            action:'voirStatFrais',
                            lstFrais:$("#lstFrais").val(),
                    },
                    // Fonction pour gérer le retour
                    function(data){
                            $("#zoneStat").html(data);
                    },
                    'text' // Format de retour : texte HTML
            );
    });
}

// fonction appelée au clic sur le bouton btAfficher
function afficherStatAnneeFraisFor() 
{
	// Permet l'exécution d'une fonction spécifique une fois le document DOM entièrement 
	//     chargé, et pret à être parcouru et manipulé.
	$(document).ready(function(){
		$.post(
			'ajax/_indexAjax.php',  //  URL script à exécuter
			{
				// données envoyées
				uc : 'statAnneeFraisFor',
				action : 'voirStatAnneeFraisFor',			
				lstAnnee : $("#lstAnnee").val(),  // Donnée à envoyer au serveur
			},
			// fonction pour gérer le retour
			function(data){
                                $("#zoneStat").html(data);   
				},
			'text' // format de retour, nous souhaitons recevoir du texte HTML donc on indique text 
			 );
		});
}

