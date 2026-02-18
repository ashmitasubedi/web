<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_NAME ?></title>
    <meta name="description" content="<?= isset($page_desc) ? $page_desc : SITE_TAGLINE ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet"/>
    <!-- MDB CSS -->
    <link rel="stylesheet" href="css/mdb.min.css"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
      <div class="brand-icon">AS</div>
      <span class="brand-name"><?= SITE_NAME ?></span>
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler border-0" type="button" data-mdb-collapse-init
            data-mdb-target="#navbarMain" aria-controls="navbarMain"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="toggler-icon"><i class="fas fa-bars"></i></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'about.php' ? 'active' : '' ?>" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact</a>
        </li>
        <li class="nav-item ms-lg-3">
          <a class="btn btn-primary-custom" href="contact.php">Get in Touch</a>
        </li>
      </ul>
    </div>
  </div>
</nav>