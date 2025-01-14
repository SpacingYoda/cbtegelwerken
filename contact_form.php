<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project10";  

// Maak verbinding met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
  die("Verbinding mislukt: " . $conn->connect_error);
}

// Verkrijg de gegevens van het formulier
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Sla de gegevens op in de database
$sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
if ($conn->query($sql) === TRUE) {
  echo "Bericht succesvol verstuurd!";
} else {
  echo "Fout bij het versturen van bericht: " . $conn->error;
}

$conn->close();
?>
