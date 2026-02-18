<!-- ===== FOOTER ===== -->
<footer class="site-footer">
  <div class="container">
    <div class="row gy-4">

      <!-- Brand column -->
      <div class="col-lg-4">
        <a class="footer-brand d-flex align-items-center gap-2 mb-3" href="index.php">
          <div class="brand-icon small">A</div>
          <span class="brand-name"><?= SITE_NAME ?></span>
        </a>
        <p class="footer-desc"><?= SITE_TAGLINE ?>. We craft digital experiences that stand out and deliver real results.</p>
        <div class="social-links mt-3">
          <a href="https://www.instagram.com/webbingplex1/" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/company/webbingplex/posts/?feedView=all" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://webbingplex.com.np/" aria-label="GitHub"><i class="fab fa-github"></i></a>
          <a href="https://www.instagram.com/webbingplex1/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-6 col-lg-2 offset-lg-1">
        <h6 class="footer-heading">Quick Links</h6>
        <ul class="footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="col-6 col-lg-2">
        <h6 class="footer-heading">Services</h6>
        <ul class="footer-links">
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Development</a></li>
          <li><a href="#">Consulting</a></li>
          <li><a href="#">Support</a></li>
        </ul>
      </div>

      <!-- Contact info -->
      <div class="col-lg-3">
        <h6 class="footer-heading">Contact</h6>
        <ul class="footer-contact">
          <li><i class="fas fa-envelope"></i><?= SITE_EMAIL ?></li>
          <li><i class="fas fa-phone"></i><?= SITE_PHONE ?></li>
          <li><i class="fas fa-map-marker-alt"></i><?= SITE_ADDRESS ?></li>
        </ul>
      </div>

    </div>

    <hr class="footer-divider">
    <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
      <p class="mb-0">&copy; <?= date('Y') ?> <?= SITE_NAME ?>. All rights reserved.</p>
      <p class="mb-0">Built by <i class="fas fa-heart text-danger"></i> ashmita subedi</p>
    </div>
  </div>
</footer>

<!-- MDB JS -->
<script src="js/mdb.umd.min.js"></script>
<!-- Custom JS -->
<script src="js/main.js"></script>
</body>
</html>