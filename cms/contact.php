<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/database.php';
require_once 'includes/functions.php';

$success = false;
$errors  = [];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = sanitize($_POST['name']    ?? '');#Uses sanitize() to clean input and ?? '' prevents undefined errors
    $email   = sanitize($_POST['email']   ?? '');
    $subject = sanitize($_POST['subject'] ?? '');
    $message = sanitize($_POST['message'] ?? '');

    // Server-side validation
    if (empty($name))                     $errors[] = 'Please enter your name.';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }
    if (empty($message))                  $errors[] = 'Please enter your message.';

    if (empty($errors)) {
        // Try to save to DB (optional — works even without DB)
        saveContact($connection, $name, $email, $subject, $message);

        // In production you'd also send an email:
        // mail(SITE_EMAIL, "Contact Form: $subject", "From: $name <$email>\n\n$message");

        $success = true;
    }
}

$page_title = 'Contact Us';#Page metadata for SEO and social sharing
$page_desc  = "Get in touch with Webbing Pvt Ltd — we'd love to hear about your project.";
include 'includes/header.php';
?>

<!-- ===========================
     PAGE HERO
     =========================== -->
<section class="page-hero">
  <div class="hero-grid-bg"></div>
  <div class="container position-relative" style="z-index:2;">
    <p class="section-label" style="justify-content:center;">Get In Touch</p>
    <h1>Let's Build Something <em style="color:var(--gold-light);">Together</em></h1>
    <p>Have a project in mind? We'd love to hear about it. Drop us a line and we'll get back to you within 24 hours.</p>
  </div>
</section>

<!-- ===========================
     CONTACT MAIN
     =========================== -->
<section class="contact-section">
  <div class="container">
    <div class="row g-4 align-items-start">

      <!-- Left: Contact info -->
      <div class="col-lg-4 animate-on-scroll">
        <div class="contact-info-card">
          <h3>Contact Info</h3>
          <p>Reach out through any of the channels below or simply fill in the form.</p>

          <div class="info-item">
            <div class="info-item-icon"><i class="fas fa-envelope"></i></div>
            <div class="info-item-text">
              <span>Email Us</span>
              <strong><?= SITE_EMAIL ?></strong>
            </div>
          </div>

          <div class="info-item">
            <div class="info-item-icon"><i class="fas fa-phone"></i></div>
            <div class="info-item-text">
              <span>Call Us</span>
              <strong><?= SITE_PHONE ?></strong>
            </div>
          </div>

          <div class="info-item">
            <div class="info-item-icon"><i class="fas fa-clock"></i></div>
            <div class="info-item-text">
              <span>Business Hours</span>
              <strong>Mon–Fri, 9am – 6pm </strong>
            </div>
          </div>

          <div class="info-item">
            <div class="info-item-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="info-item-text">
              <span>Our Office</span>
              <strong><?= SITE_ADDRESS ?></strong>
            </div>
          </div>

          <!-- Map placeholder -->
          <div class="map-placeholder">
            <i class="fas fa-map"></i>
            <span><?= SITE_ADDRESS ?></span>
          </div>

          <!-- Social -->
          <div class="social-links mt-4">
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>

      <!-- Right: Contact form -->
      <div class="col-lg-8 animate-on-scroll" style="transition-delay:0.2s;">
        <div class="contact-form-card">

          <?php if ($success): ?>
          <div class="alert-success-custom">
            <i class="fas fa-check-circle"></i>
            <strong>Message sent!</strong>&nbsp;Thank you, we'll be in touch within 24 hours.
          </div>
          <?php endif; ?>

          <?php if (!empty($errors)): ?>
          <div class="alert-error-custom">
            <i class="fas fa-exclamation-circle"></i>
            <div>
              <?php foreach ($errors as $err): ?>
                <div><?= $err ?></div>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>

          <h3>Send a Message</h3>
          <p>Fill in the form below and we'll get back to you as soon as possible.</p>

          <!-- Client-side error message (hidden by default) -->
          <div class="alert-error-custom form-error-msg" style="display:none;">
            <i class="fas fa-exclamation-circle"></i>
            Please fill in all required fields correctly.
          </div>

          <form id="contactForm" method="POST" action="contact.php" novalidate>

            <div class="row g-3">
              <div class="col-md-6">
                <label for="name" class="form-label">Full Name <span style="color:red">*</span></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ashmita subedi"
                       value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>" required>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email Address <span style="color:red">*</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="subediashmita@gmail.com"
                       value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" required>
              </div>
              <div class="col-12">
                <label for="subject" class="form-label">Subject</label>
                <select class="form-select" id="subject" name="subject">
                  <option value="General Inquiry" <?= (isset($_POST['subject']) && $_POST['subject']==='General Inquiry') ? 'selected' : '' ?>>General Inquiry</option>
                  <option value="New Project"     <?= (isset($_POST['subject']) && $_POST['subject']==='New Project')     ? 'selected' : '' ?>>New Project</option>
                  <option value="Support"         <?= (isset($_POST['subject']) && $_POST['subject']==='Support')         ? 'selected' : '' ?>>Support / Maintenance</option>
                  <option value="Partnership"     <?= (isset($_POST['subject']) && $_POST['subject']==='Partnership')     ? 'selected' : '' ?>>Partnership</option>
                  <option value="Other"           <?= (isset($_POST['subject']) && $_POST['subject']==='Other')           ? 'selected' : '' ?>>Other</option>
                </select>
              </div>
              <div class="col-12">
                <label for="message" class="form-label">Message <span style="color:red">*</span></label>
                <textarea class="form-control" id="message" name="message" placeholder="Tell us about your project, timeline, budget or anything you'd like to share…" required><?= isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '' ?></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn-submit">
                  <i class="fas fa-paper-plane me-2"></i>Send Message
                </button>
              </div>
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FAQ or trust signals -->
<section style="padding:4rem 0; background:var(--light-2);">
  <div class="container text-center animate-on-scroll">
    <p class="section-label" style="justify-content:center;">Why Choose Us</p>
    <h2 class="section-title" style="font-size:2rem;">You're in <span class="highlight">Good Hands</span></h2>
    <div class="row g-4 mt-3 justify-content-center">
      <?php
      $trust = [
        ['fas fa-reply-all', 'Fast Response', '24-hour reply guarantee on all enquiries, no exceptions.'],
        ['fas fa-file-contract', 'Clear Contracts', 'Transparent pricing and scope — no hidden fees, ever.'],
        ['fas fa-infinity', 'Ongoing Support', 'We stay by your side long after launch day.'],
      ];
      foreach ($trust as $i => $t): ?>
      <div class="col-md-4 animate-on-scroll" style="transition-delay:<?= $i*0.1 ?>s;">
        <div class="feature-card text-center" style="background:var(--white);">
          <div class="feature-icon mx-auto"><i class="<?= $t[0] ?>"></i></div>
          <h5><?= $t[1] ?></h5>
          <p><?= $t[2] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>