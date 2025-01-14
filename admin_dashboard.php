<?php
session_start();  // Sessie starten

// Controleer of de admin is ingelogd
if ($_SESSION['loggedin'] !== true) {
  header("Location: admin_login.php");  // Doorverwijzen naar login als niet ingelogd
  exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project10";  // Vervang door je databasenaam

// Maak verbinding met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
  die("Verbinding mislukt: " . $conn->connect_error);
}

// Haal de contactberichten op
$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
</head>
<body>
  <h1>Welkom, Admin</h1>
  <h2>Contactberichten</h2>
  <table border="1">
    <tr>
      <th>Naam</th>
      <th>Email</th>
      <th>Telefoonnummer</th>
      <th>Bericht</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["message"]. "</td></tr>";
      }
    } else {
      echo "<tr><td colspan='4'>Geen berichten</td></tr>";
    }
    $conn->close();
    ?>
  </table>
</body>
</html>
