<?php
include ('index.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if required fields are filled
  if (empty($_POST['name']) || empty($_POST['email'])) {
      // Redirect back to contact.php with an error message if fields are empty
      header("Location: contact.php?error=empty");
      exit();
  }
} else {
  // If someone tries to access this page directly, redirect them back
  header("Location: contact.php"); // Redirect to the contact page
  exit();
}

// Optionally unset the access variable after granting access
unset($_SESSION['access_granted']);

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
              icon: 'success',
          }).then(() => {
              window.location.href = 'home.php'; // Redirect after clicking OK
          });
      };
  </script>";
} else {
  echo "Fout bij het versturen van bericht: " . $conn->error;
}

$conn->close();
?>
