<?php include('header.php'); ?>

<h1>Contact Opnemen</h1>
<form action="contact_form.php" method="post">
  <label for="name">Naam:</label>
  <input type="text" id="name" name="name" required><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br><br>

  <label for="phone">Telefoonnummer:</label>
  <input type="text" id="phone" name="phone" required><br><br>

  <label for="message">Bericht:</label>
  <textarea id="message" name="message" required></textarea><br><br>

  <input type="submit" value="Verstuur">
</form>

<?php include('footer.php'); ?>
