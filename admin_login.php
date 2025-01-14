<?php
session_start();  // Sessie starten

// Controleer of de admin is ingelogd
if ($_SESSION['loggedin'] == true) {
  header("Location: admin_dashboard.php");  // Als ingelogd, doorverwijzen naar dashboard
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Controleer de gebruikersnaam en wachtwoord
  if ($username == 'admin' && $password == '0000') {  // Vervang door je eigen admin gebruikersnaam en wachtwoord
    $_SESSION['loggedin'] = true;
    header("Location: admin_dashboard.php");  // Doorverwijzen naar dashboard
  } else {
    $error = "Ongeldige inloggegevens";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
</head>
<body>
  <h1>Admin Login</h1>
  <form method="post" action="">
    <label for="username">Gebruikersnaam:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Inloggen">
  </form>
  <?php if(isset($error)) { echo "<p>" . $error . "</p>"; } ?>
</body>
</html>
