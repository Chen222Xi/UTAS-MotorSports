<!-- Sponsors Section -->
<section class="footer-sponsors">
  <div class="container">

  <?php
  // sponsor 公司网址列表（可自行扩充）
  $sponsorDomains = [
    'bosch.com',
    'redbull.com',
    'br-automation.com',
    'siemens.com',
    'monit.com.au',
    'tyrepower.com.au',
    'rohde-schwarz.com',
    'utas.edu.au',
    'rmit.edu.au',
    'toyota.com',
    'nvidia.com',
    'altair.com'
  ];
?>

<div class="sponsor-grid">
  <?php foreach ($sponsorDomains as $domain): ?>
    <div class="sponsor-box">
      <img src="https://logo.clearbit.com/<?php echo $domain; ?>" alt="<?php echo ucfirst(explode('.', $domain)[0]); ?> Logo" class="sponsor-logo">
    </div>
  <?php endforeach; ?>
</div>


    <a href="/sponsors" class="btn-show-more">Show More</a>
  </div>
</section>

<!-- Main Footer -->
<footer class="site-footer">
  <div class="footer-top container">
    <div class="footer-left">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/MS-logo.png" alt="UTAS Logo" class="footer-logo">
    </div>

    <div class="footer-right">
      <p class="footer-address">UTAS Motorsport, Sandy Bay, TAS, Australia</p>

      <p class="footer-follow-label">Follow Us</p>
      <div class="footer-socials">
        <a href="https://www.facebook.com/UniversityofTasmaniaMotorsport" target="_blank" aria-label="Facebook">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" target="_blank" aria-label="X"><i class="fab fa-x-twitter"></i></a>
        <a href="https://www.instagram.com/utasmotorsport/" target="_blank" aria-label="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

