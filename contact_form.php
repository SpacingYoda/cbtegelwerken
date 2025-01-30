<?php
session_start();

// Check if form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if token exists and matches the session token
    if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
        die("Unauthorized access. Please use the form on Contact.php.");
    }

    // Reset the token to prevent reuse
    unset($_SESSION['token']);

include ('index.php');

// Verkrijg de gegevens van het formulier
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Sla de gegevens op in de database
$sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
if ($conn->query($sql) === TRUE) {
  echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
  echo "<script>
      window.onload = function() {
          Swal.fire({
              title: 'Dank u!',
              text: 'Uw informatie is vertuurd!',
              icon: 'success'
          }).then(() => {
              window.location.href = 'home.php'; // Redirect after clicking OK
          });
      };
  </script>";
} else {
  echo "Fout bij het versturen van bericht: " . $conn->error;
}

$conn->close();
  } else {
    // Redirect users who try to access Contact_form.php directly
    header("Location: Contact.php");
    exit();
}
?>
