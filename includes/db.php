<?php
$host = 'localhost';
$dbname = 'babillard_db';
$user = 'root'; // Remplacez par votre utilisateur de base de données
$pass = ''; // Remplacez par votre mot de passe

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
