<?php

$host = "d-bddmaria-01.in.ac-noumea.nc"; // Adresse de la base de données
$user = "kube"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$database = "kube_dev"; // Nom de la base de données

try {
    // Connexion à la base de données MySQL en utilisant PDO
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);

    // Configuration des options PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Exécution d'une requête SQL
    $query = "SELECT * FROM test";
    $result = $conn->query($query);

    // Affichage des résultats
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $row['id'] . " - Nom: " . $row['name'] . "<br>";
    }
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}

// Fermer la connexion
$conn = null;
?>
