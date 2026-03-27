<footer>
  <div class="footer-newsletter">
    <div class="newsletter-copy">
      <h4>Stay ahead in healthcare data &amp; AI</h4>
      <p>Insights, case studies, and industry updates — delivered to your inbox.</p>
    </div>
    <div class="newsletter-form">
      <input type="email" placeholder="Enter your work email"/>
      <button type="button">Subscribe</button>
    </div>
  </div>
  <div class="footer-top">
    <div class="footer-brand">
      <a href="<?php echo sdsol_url('/'); ?>" class="nav-logo-link">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="SD Sol" class="nav-logo-img nav-logo-img--footer"/>
      </a>
      <p>A unique intersection of domain, functional &amp; technical expertise — delivering outcomes-led data and AI solutions for healthcare organizations.</p>
      <div class="footer-contact">
        <a href="tel:+16094550879">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block;vertical-align:middle;margin-right:6px;color:var(--teal)"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.7 13.6a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.61 3h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.6a16 16 0 0 0 6 6l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          +1 609 455 0879
        </a>
        <a href="mailto:info@sdsol.ai">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block;vertical-align:middle;margin-right:6px;color:var(--teal)"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          info@sdsol.ai
        </a>
        <a href="#">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block;vertical-align:middle;margin-right:6px;color:var(--teal)"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          35 Almond Drive, Somerset, NJ 08873
        </a>
      </div>
    </div>
    <div class="footer-col">
      <h4>Services</h4>
      <ul>
        <li><a href="<?php echo sdsol_url('/service-data-infrastructure/'); ?>">Data Infrastructure</a></li>
        <li><a href="<?php echo sdsol_url('/service-data-governance/'); ?>">Data Governance</a></li>
        <li><a href="<?php echo sdsol_url('/service-data-engineering/'); ?>">Data Engineering</a></li>
        <li><a href="<?php echo sdsol_url('/service-data-analytics/'); ?>">Data Analytics</a></li>
        <li><a href="<?php echo sdsol_url('/service-ai-ml/'); ?>">AI / ML Solutions</a></li>
        <li><a href="<?php echo sdsol_url('/service-advisory/'); ?>">Advisory &amp; Strategy</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Success Stories</h4>
      <ul>
        <li><a href="<?php echo sdsol_url('/success-stories/'); ?>">Data Engineering</a></li>
        <li><a href="<?php echo sdsol_url('/success-stories/'); ?>">Data Governance</a></li>
        <li><a href="<?php echo sdsol_url('/success-stories/'); ?>">Patient 360</a></li>
        <li><a href="<?php echo sdsol_url('/success-stories/'); ?>">HEDIS Analysis</a></li>
        <li><a href="<?php echo sdsol_url('/success-stories/'); ?>">Hospital Re-admission</a></li>
        <li><a href="<?php echo sdsol_url('/success-stories/'); ?>">RCM Chatbot</a></li>
        <li><a href="<?php echo sdsol_url('/success-stories/'); ?>">Care Gaps Closure</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Company</h4>
      <ul>
        <li><a href="<?php echo sdsol_url('/about/'); ?>">About Us</a></li>
        <li><a href="<?php echo sdsol_url('/about/'); ?>">Join Us</a></li>
        <li><a href="<?php echo sdsol_url('/technologies/'); ?>">Technology Expertise</a></li>
        <li><a href="<?php echo sdsol_url('/contact/'); ?>">Contact Us</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>&copy; <?php echo date('Y'); ?> SD Sol. All rights reserved.</span>
    <div class="footer-bottom-links">
      <a href="#">Privacy Policy</a>
      <a href="#">Accessibility</a>
      <a href="#">Security</a>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
