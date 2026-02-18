<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/database.php';
require_once 'includes/functions.php';

$page_title = 'About Us';
$page_desc  = 'Learn about Webbing Pvt Ltd — our story, mission, and the team behind the work.';
include 'includes/header.php';
?>

<!-- ===========================
     PAGE HERO
     =========================== -->
<section class="page-hero">
  <div class="hero-grid-bg"></div>
  <div class="container position-relative" style="z-index:2;">
    <p class="section-label" style="justify-content:center; color:var(--gold);">Our Story</p>
    <h1>The People Behind <em style="color:var(--gold-light); font-style:italic;">Webbing Pvt Ltd</em></h1>
    <p>We're a passionate team of developers and designers dedicated to building web experiences that matter.</p>
  </div>
</section>

<!-- ===========================
     ABOUT MAIN
     =========================== -->
<section class="about-section">
  <div class="container">
    <div class="row g-5 align-items-center">

      <!-- Text -->
      <div class="col-lg-6 animate-on-scroll">
        <p class="section-label">Who We Are</p>
        <h2 class="section-title">Crafting Digital <span class="highlight">Excellence</span> Since 2024</h2>
        <p>Webbing Pvt Ltd was founded with a simple belief: every business deserves a powerful online presence. We started as a fourperson studio and have grown into a full-service web agency working with startups and enterprise clients worldwide.</p>
        <p>Our team combines creative design thinking with solid engineering to deliver websites and web applications that aren't just beautiful they perform, convert, and scale with your business.</p>
        <p>We work exclusively with a small number of clients at any given time, giving each project the full attention and dedication it deserves.</p>
        <div class="d-flex gap-3 flex-wrap mt-4">
          <a href="contact.php" class="btn-hero-primary" style="display:inline-block; color:var(--dark);">
            Work With Us Please
          </a>
          <a href="#team" class="btn-outline-gold" style="display:inline-block;">
            Meet the Team
          </a>
        </div>
      </div>

      <!-- Visual -->
      <div class="col-lg-6 animate-on-scroll" style="transition-delay:0.2s;">
        <div class="about-visual">
          <div class="position-relative" style="z-index:1;">
            <h4 style="color:var(--white); margin-bottom:1.5rem; font-size:1.2rem;">Our Core Values</h4>
            <div class="value-item">
              <div class="value-icon"><i class="fas fa-star"></i></div>
              <div>
                <h6>Quality First</h6>
                <p>We never cut corners. Every line of code and every pixel is deliberate and purposeful.</p>
              </div>
            </div>
            <div class="value-item">
              <div class="value-icon"><i class="fas fa-comments"></i></div>
              <div>
                <h6>Open Communication</h6>
                <p>You're always in the loop. Transparent updates from kickoff to launch and beyond.</p>
              </div>
            </div>
            <div class="value-item">
              <div class="value-icon"><i class="fas fa-rocket"></i></div>
              <div>
                <h6>Built to Perform</h6>
                <p>Speed, accessibility, and SEO are baked in from day one not added as an afterthought.</p>
              </div>
            </div>
            <div class="value-item" style="border-bottom:none;">
              <div class="value-icon"><i class="fas fa-handshake"></i></div>
              <div>
                <h6>Long-term Partnership</h6>
                <p>We build relationships, not just websites. Many of our clients have been with us for years.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===========================
     STATS BAR
     =========================== -->
<section class="stats-bar">
  <div class="container">
    <div class="row g-4 text-center">
      <?php
      $stats = [
        ['120', '+', 'Projects Completed'],
        ['8',   '+', 'Years in Business'],
        ['45',  '+', 'Happy Clients'],
        ['4',   '',  'Countries Served'],
      ];
      foreach ($stats as $i => $st): ?>
      <div class="col-6 col-md-3 animate-on-scroll" style="transition-delay:<?= $i*0.1 ?>s;">
        <div class="stat-block">
          <span class="num" data-count="<?= $st[0] ?>" data-suffix="<?= $st[1] ?>"><?= $st[0] . $st[1] ?></span>
          <span class="lbl"><?= $st[2] ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===========================
     TEAM SECTION
     =========================== -->
<section class="team-section" id="team">
  <div class="container">
    <div class="text-center mb-5 animate-on-scroll">
      <p class="section-label" style="justify-content:center;">The Team</p>
      <h2 class="section-title">Meet the <span class="highlight">Humans</span> Behind the Code</h2>
      <p class="text-muted" style="max-width:480px; margin:0 auto;">
        A diverse group of thinkers, makers, and problem-solvers who love what they do.
      </p>
    </div>
    <div class="row g-4 justify-content-center">
      <?php
      $team = [
        ['A', 'Ashmita subedi',   'Founder & Lead Developer',  'Full-stack architect with a passion for clean, scalable PHP and modern JavaScript. 10+ years shipping production software.', 'fa-twitter', 'fa-linkedin-in', 'fa-github'],
        ['J', 'Ikita shrestha',     'UI/UX Designer',             'Creates interfaces that balance visual beauty with intuitive usability. Former product designer at two SaaS unicorns.',      'fa-twitter', 'fa-dribbble',   'fa-behance'],
        ['M', 'Yugeena maharjhan',   'Backend Engineer',           'Database wizard and API specialist. Believes that great backend work is invisible — and that\'s exactly how it should be.',  'fa-github',  'fa-linkedin-in', 'fa-twitter'],
        ['P', 'Ganga Acharya',  'Project Manager',            'Keeps projects on track, clients happy, and the team energized. PMP certified with a sharp eye for scope and timeline.',    'fa-linkedin-in','fa-twitter', 'fa-instagram'],
      ];
      foreach ($team as $i => $m): ?>
      <div class="col-sm-6 col-lg-3 animate-on-scroll" style="transition-delay:<?= $i*0.1 ?>s;">
        <div class="team-card">
          <div class="team-avatar"><?= $m[0] ?></div><!-- Initials avatar -->
          <h5><?= $m[1] ?></h5><!-- Name -->
          <p class="role"><?= $m[2] ?></p><!-- Role -->
          <p><?= $m[3] ?></p><!-- Bio -->
          <div class="team-social"><!-- Social links -->
            <a href="#" aria-label="Social 1"><i class="fab <?= $m[4] ?>"></i></a>
            <a href="#" aria-label="Social 2"><i class="fab <?= $m[5] ?>"></i></a>
            <a href="#" aria-label="Social 3"><i class="fab <?= $m[6] ?>"></i></a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-band">
  <div class="container text-center animate-on-scroll">
    <h2>Like What You See? <em style="color:var(--gold);">Let's Talk.</em></h2>
    <p class="mt-3 mb-4">We'd love to hear about your project and explore how we can help.</p>
    <a href="contact.php" class="btn-hero-primary" style="display:inline-block;">
      <i class="fas fa-envelope me-2"></i>Get in Touch
    </a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>