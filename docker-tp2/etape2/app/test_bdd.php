<?php
// Informations de connexion à la base de données
$servername = "data_new";
$username = "root";
$password = "root";
$dbname = "test_db";

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Créer la table si elle n'existe pas déjà
$sql_create_table = "CREATE TABLE IF NOT EXISTS test_table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
)";
if (!$conn->query($sql_create_table)) {
    die("Error creating table: " . $conn->error);
}

// Générer un nom unique avec un timestamp
$name = "TestName_" . uniqid();

// Insérer un nouvel enregistrement
$sql_insert = "INSERT INTO test_table (name) VALUES ('$name')";
if ($conn->query($sql_insert) === TRUE) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql_insert . "<br>" . $conn->error;
}

// Effectuer une requête de lecture
$sql_select = "SELECT * FROM test_table ORDER BY id DESC";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    // Afficher les résultats
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}

// Fermer la connexion
$conn->close();
?>


