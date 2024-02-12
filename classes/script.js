$(document).ready(function() {
    // Charger la liste des cueilleurs
    $.ajax({
        type: 'GET',
        url: 'charge_cueilleurs.php', // Page PHP pour charger les cueilleurs depuis la base de données
        success: function(response) {
            $('#cueilleur').html(response); // Remplacer le contenu du select avec les cueilleurs récupérés
        }
    });

    // Charger la liste des parcelles
    $.ajax({
        type: 'GET',
        url: 'charge_parcelles.php', // Page PHP pour charger les parcelles depuis la base de données
        success: function(response) {
            $('#parcelle').html(response); // Remplacer le contenu du select avec les parcelles récupérées
        }
    });

    // Validation AJAX lors de la soumission du formulaire
    $('#cueilletteForm').submit(function(event) {
        event.preventDefault(); // Empêcher le formulaire de se soumettre normalement

        // Récupérer les valeurs du formulaire
        var dateCueillette = $('#dateCueillette').val();
        var cueilleur = $('#cueilleur').val();
        var parcelle = $('#parcelle').val();
        var poidsCueilli = $('#poidsCueilli').val();

        // Validation AJAX
        $.ajax({
            type: 'POST',
            url: 'validation.php', // Page de traitement PHP pour la validation
            data: {
                dateCueillette: dateCueillette,
                cueilleur: cueilleur,
                parcelle: parcelle,
                poidsCueilli: poidsCueilli
            },
            success: function(response) {
                $('#message').html(response); // Afficher le message de validation
            }
        });
    });
});
