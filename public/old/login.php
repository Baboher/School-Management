<?php
session_start();

$servername = $_SERVER['SERVER_ADDR']; // Hôte de la base de données
$username = "root";        // Nom d'utilisateur de la base de données
$password = "";            // Mot de passe de la base de données
$dbname = "school management";    // Nom de la base de données

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupérer les données du formulaire
    $mat = $_POST['mat'];
    $pw = $_POST['pw'];

    // Préparer la requête SQL pour vérifier les informations d'identification
    $sql = "SELECT * FROM students WHERE mat = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $mat, $pw);
    $stmt->execute();
    $result = $stmt->get_result();

    // Vérifier si les informations sont valides
    if ($result->num_rows > 0) {
        // Connexion réussie, redirection vers une nouvelle page
        header("Location: student-dashboard.php");
        exit();
    } else {
        // Si l'utilisateur ou le mot de passe est incorrect
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }

    // Fermer la connexion
    $stmt->close();
    $conn->close();
}
?>
