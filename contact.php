<?php session_start();
$_SESSION['token'] = bin2hex(random_bytes(32)); // Generate a unique token

include('header.php');

?>
<body>
  <section class="contact-container">
    <h1>Contact Opnemen</h1>
    <p>Heeft u vragen of wilt u een afspraak maken? Vul onderstaand formulier in, en wij nemen zo snel mogelijk contact met u op.</p>
    <form action="contact_form.php" method="post" class="contact-form">
      <div class="form-group">
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" placeholder="Uw naam" required>
      </div>
      <div class="form-group">
        <label for="email">E-mailadres:</label>
        <input type="email" id="email" name="email" placeholder="Uw e-mailadres" required>
      </div>
      <div class="form-group">
        <label for="phone">Telefoonnummer:</label>
        <input type="tel" id="phone" name="phone" placeholder="Uw telefoonnummer" required>
      </div>
      <div class="form-group">
        <label for="message">Bericht:</label>
        <textarea id="message" name="message" rows="5" placeholder="Uw bericht" required></textarea>
      </div>
      <button type="submit" class="submit-btn">Versturen</button>
    </form>
  </section>
</body>
<?php include('footer.php'); ?>