<?php
$serverName = "172.30.48.29:"; // Replace with your SQL Server name
$connectionOptions = array(
    "Database" => "aangiftes", // Replace with your database name
    "Uid" => "sa", // Replace with your SQL Server username
    "PWD" => "P@ssword" // Replace with your SQL Server password
);

// Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}

// Process the form data
$naam = $_POST['naam'];
$email = $_POST['email'];
$anoniem = $_POST['anoniem'];
$locatie = $_POST['locatie'];
$misdaad = $_POST['misdaad'];
$omschrijving = $_POST['omschrijving'];

// Insert data into the database
$sql = "INSERT INTO aangifte (1, naam, email, anoniem, locatie, misdaad, omschrijving) VALUES (?, ?, ?, ?, ?, ?, ?)";
$params = array($id, $naam, $email, $anoniem, $locatie, $misdaad, $omschrijving);
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
} 

echo "Record successfully inserted.";

// Close the connection
sqlsrv_close($conn);



?>
