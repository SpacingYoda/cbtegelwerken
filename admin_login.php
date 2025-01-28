<?php
session_start();  // Sessie starten

// Controleer of de admin is ingelogd
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  header("Location: admin_dashboard.php");  // Als ingelogd, doorverwijzen naar dashboard
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Controleer de gebruikersnaam en wachtwoord
  if ($username == 'admin' && $password == '0000') {  // Vervang door je eigen admin gebruikersnaam en wachtwoord
    $_SESSION['loggedin'] = true;
    header("Location: admin_dashboard.php");  // Doorverwijzen naar dashboard
    exit;
  } else {
    $error = "Ongeldige inloggegevens";
  }
}
?>
<?php include('header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="style.css"> 
</head>
<body>
  <div class="contact-container login-container">
    <h1>Admin Login</h1>
    <form method="post" action="" class="contact-form">
      <div class="form-group">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Wachtwoord:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="submit-btn">Inloggen</button>
    </form>
    <?php if(isset($error)) { echo "<p class='error-message'>" . $error . "</p>"; } ?>
  </div>
</body>
</html>
<?php include('footer.php'); ?>

