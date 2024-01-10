<?php
$host = "postgres"; // Replace with your PostgreSQL host
$port = "5432"; // Replace with your PostgreSQL port (usually 5432)
$dbname = "aangiftes";  // Replace with your PostgreSQL database name
$user = "your_username";         // Replace with your PostgreSQL username
$password = "your_password";     // Replace with your PostgreSQL password

// Establishes the connection
try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Process the form data
$naam = $_POST['naam'];
$email = $_POST['email'];
$anoniem = isset($_POST['anoniem']) ? 1 : 0;
$locatie = $_POST['locatie'];
$misdaad = $_POST['misdaad'];
$omschrijving = $_POST['omschrijving'];



// Insert data into the database
$sql = "INSERT INTO aangifte (naam, email, anoniem, locatie, misdaad, omschrijving_verdachte) VALUES ( ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$naam, $email, $anoniem, $locatie, $misdaad, $omschrijving]);

echo "Record successfully inserted.";

// Close the connection
$conn = null;
?>
