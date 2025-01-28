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
  <?php include ('header.php'); ?>
  <div class="admin-container">
    <h1>Welkom, Admin</h1>
    <h2>Contactberichten</h2>
    <table>
      <tr>
        <th>Naam</th>
        <th>Email</th>
        <th>Telefoonnummer</th>
        <th>Bericht</th>
      </tr>
      <?php
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . htmlspecialchars($row["name"]) . "</td><td>" . htmlspecialchars($row["email"]) . "</td><td>" . htmlspecialchars($row["phone"]) . "</td><td>" . htmlspecialchars($row["message"]) . "</td></tr>";
        }
      } else {
        echo "<tr><td colspan='4' class='no-messages'>Geen berichten</td></tr>";
      }
      $conn->close();
      ?>
    </table>
  </div>
</body>
</html>
<?php include('footer.php'); ?>