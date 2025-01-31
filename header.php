<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tegelzetter Website</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<?php
    function isActive($page) {
        return basename($_SERVER['PHP_SELF']) === $page ? 'active' : '';
    }
?>
<nav>
    <ul>
        <li><a href="home.php" class="<?= isActive('home.php'); ?>">Home</a></li>
        <li><a href="portfolio.php" class="<?= isActive('portfolio.php'); ?>">Portfolio</a></li>
        <li><a href="diensten.php" class="<?= isActive('diensten.php'); ?>">Diensten</a></li>
        <li><a href="contact.php" class="<?= isActive('contact.php'); ?>">Contact</a></li>
        <li class="login-button"><a href="admin_login.php" class="<?= isActive('admin_login.php'); ?>">Inloggen</a></li>
    </ul>
</nav>

