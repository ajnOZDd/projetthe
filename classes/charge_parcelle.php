<?php
// Connexion à la base de données - Assurez-vous d'adapter ces informations à votre environnement
$servername = "localhost";
$username = "nom_utilisateur";
$password = "mot_de_passe";
$database = "nom_base_de_donnees";

$connexion = new mysqli($servername, $username, $password, $database);
if ($connexion->connect_error) {
    die("Erreur de connexion à la base de données : " . $connexion->connect_error);
}

// Récupérer les parcelles depuis la base de données
$query = "SELECT idParcelle, numeroParcelle FROM Parcelles";
$result = mysqli_query($connexion, $query);

// Créer les options HTML
$options = '';
while ($row = mysqli_fetch_assoc($result)) {
    $options .= '<option value="' . $row['idParcelle'] . '">' . $row['numeroParcelle'] . '</option>';
}

echo $options;

// Fermer la connexion à la base de données
$connexion->close();
?>
