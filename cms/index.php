<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/database.php';
require_once 'includes/functions.php';

$page_title = 'Home'; #unique titles and descriptions for each page for better SEO
$page_desc  = 'WEBBING PLEX PVT.LTD — ' . SITE_TAGLINE;
include 'includes/header.php';
?>

<!-- ===========================
     HERO SECTION
     =========================== -->
<section class="hero-section">
  <div class="hero-grid-bg"></div>
  <div class="hero-glow"></div>
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Left: copy -->
      <div class="col-lg-6 hero-content">
        <div class="hero-badge">
          <span></span> Currently accepting new projects
        </div>
        <h1 class="hero-title">
          The Art Of
          <span class="line-gold"> Connecting</span>
          to the people.
        </h1>
        <p class="hero-subtitle">
          Full-stack web development, thoughtful design, and scalable solutions —
          crafted for businesses ready to grow.
        </p>
        <div class="hero-actions">
          <a href="about.php" class="btn-hero-primary">Discover Our Story</a>
          <a href="contact.php" class="btn-outline-gold">Start a Project</a>
        </div>
        <!--Animated stats - -->
        <div class="hero-stats">
          <div class="stat-item">
            <span class="stat-number" data-count="120" data-suffix="+">0+</span>
            <span class="stat-label">Projects Done</span>
          </div>
          <div class="stat-item">
            <span class="stat-number" data-count="8" data-suffix=" yrs">0 yrs</span>
            <span class="stat-label">Experience</span>
          </div>
          <div class="stat-item">
            <span class="stat-number" data-count="98" data-suffix="%">0%</span>
            <span class="stat-label">Happy Clients</span>
          </div>
        </div>
      </div>

      <!-- Right: visual card -->
      <div class="col-lg-6 hero-image-col">
        <div class="hero-card-float">
          <p class="section-label mb-3">What We Do</p>
          <!--Styled using CSS pills for a modern look -->
          <div class="d-flex flex-wrap">
            <span class="service-pill"><i class="fas fa-code"></i> Web Development</span>
            <span class="service-pill"><i class="fas fa-paint-brush"></i> UI / UX Design</span>
            <span class="service-pill"><i class="fas fa-mobile-alt"></i> Responsive Design</span>
            <span class="service-pill"><i class="fas fa-database"></i> Backend & APIs</span>
            <span class="service-pill"><i class="fas fa-search"></i> SEO Optimization</span>
            <span class="service-pill"><i class="fas fa-shield-alt"></i> Security</span>
            <span class="service-pill"><i class="fas fa-cloud"></i> Hosting & Deploy</span>
            <span class="service-pill"><i class="fas fa-headset"></i> 24/7 Support</span>
          </div>

          <!-- Mini testimonial -->
          <div style="margin-top:1.5rem; padding:1.25rem; background:rgba(255,255,255,0.04); border-radius:10px; border:1px solid rgba(201,168,76,0.1);">
            <p style="color:rgba(255,255,255,0.7); font-size:0.875rem; font-style:italic; margin:0 0 0.75rem;">
              "Webbing pvt  transformed our online presence completely and their attention to detail is unmatched."
            </p>
            <div class="d-flex align-items-center gap-2">
              <div style="width:32px;height:32px;border-radius:50%;background:linear-gradient(135deg,#C9A84C,#9A7A32);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:0.8rem;color:#0D0D0D;">S</div>
              <div>
                <div style="color:#fff;font-size:0.8rem;font-weight:500;">Ganga Acharya</div>
                <div style="color:rgba(255,255,255,0.35);font-size:0.72rem;">Business Development Officer</div>
              </div>
              <div class="ms-auto" style="color:#C9A84C;font-size:0.75rem;">
                ★★★★★
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===========================
     FEATURES SECTION
     =========================== -->
<section class="features-section">
  <div class="container">
    <div class="text-center mb-5 animate-on-scroll">
      <p class="section-label" style="justify-content:center;">Our Services</p>
      <h2 class="section-title">Everything You Need to <span class="highlight">Succeed Online</span></h2>
      <p class="text-muted" style="max-width:500px;margin:0 auto;">
        We provide end-to-end digital solutions tailored to your unique business goals and audience.
      </p>
    </div>
    <div class="row g-4">
        <!--this is  multidimensional array-->
      <?php
      $services = [
        ['fas fa-laptop-code', 'Web Development',     'Custom websites and web apps built with modern PHP, Laravel, and JavaScript frameworks.'],
        ['fas fa-palette',     'UI/UX Design',        'Beautiful, user-focused interfaces that convert visitors into loyal customers.'],
        ['fas fa-mobile-alt',  'Responsive Design',   'Your site looks and works perfectly on every device, screen size, and browser.'],
        ['fas fa-lock',        'Security & Privacy',  'Best-practice security measures to keep your data and your users protected.'],
        ['fas fa-chart-line',  'SEO & Analytics',     'Data-driven optimization strategies that drive organic traffic and real growth.'],
        ['fas fa-headset',     '24/7 Support',        'Round-the-clock technical support so your site is always running at its best.'],
      ];#Each service has 3 values: icon class, title, and description so there is 3 $s in the array
      foreach ($services as $i => $s): ?>
      <div class="col-md-6 col-lg-4 animate-on-scroll" style="transition-delay:<?= $i * 0.1 ?>s;"><!--Adds delay animation for each code-->
        <div class="feature-card">
          <div class="feature-icon"><i class="<?= $s[0] ?>"></i></div>
          <h5><?= $s[1] ?></h5>
          <p><?= $s[2] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===========================
     CTA BAND
     =========================== -->
<section class="cta-band">
  <div class="container text-center animate-on-scroll">
    <h2>Ready to Build Something <em style="color:var(--gold);">Amazing?</em></h2>
    <p class="mt-3 mb-4">Tell us about your project and we'll get back to you within 24 hours.</p>
    <a href="contact.php" class="btn-hero-primary" style="display:inline-block;">
      <i class="fas fa-paper-plane me-2"></i>Start the Conversation
    </a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>