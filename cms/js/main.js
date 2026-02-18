
document.addEventListener('DOMContentLoaded', function () {

  // --- Navbar scroll effect ---
  const nav = document.getElementById('mainNav');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 40) {
      nav.classList.add('scrolled');
    } else {
      nav.classList.remove('scrolled');
    }
  });

  // --- Scroll reveal ---
  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.animate-on-scroll').forEach(function (el) {
    observer.observe(el);
  });

  // --- Animated counters ---
  const counters = document.querySelectorAll('[data-count]');
  const counterObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = parseInt(el.dataset.count, 10);
        const suffix = el.dataset.suffix || '';
        let current = 0;
        const step = Math.ceil(target / 50);
        const interval = setInterval(function () {
          current = Math.min(current + step, target);
          el.textContent = current + suffix;
          if (current >= target) clearInterval(interval);
        }, 30);
        counterObserver.unobserve(el);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(function (el) { counterObserver.observe(el); });

  // --- Contact form client validation ---
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      const name    = contactForm.querySelector('#name');
      const email   = contactForm.querySelector('#email');
      const message = contactForm.querySelector('#message');
      let valid = true;

      [name, email, message].forEach(function (field) {
        field.classList.remove('is-invalid');
      });

      if (!name.value.trim()) { name.classList.add('is-invalid'); valid = false; }
      if (!email.value.trim() || !email.value.includes('@')) {
        email.classList.add('is-invalid'); valid = false;
      }
      if (!message.value.trim()) { message.classList.add('is-invalid'); valid = false; }

      if (!valid) {
        e.preventDefault();
        contactForm.querySelector('.form-error-msg').style.display = 'flex';
      }
    });
  }

});