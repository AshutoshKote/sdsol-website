<?php get_header(); ?>

<section class="page-hero">
  <div class="page-hero-content">
    <h1>Data <span class="hl">Governance</span></h1>
    <p>Turn data chaos into trusted, compliant, and audit-ready data assets across your entire organization.</p>
  </div>
</section>

<section class="section reveal">
  <div class="section-wrap two-col">
    <div class="col-left">
      <span class="section-tag">What We Deliver</span>
      <h2 class="section-title">Data You Can Trust, Compliance You Can Prove</h2>
      <p class="section-sub">In healthcare, untrustworthy data isn't just an operational problem — it's a regulatory and patient safety risk. We implement governance frameworks that establish ownership, enforce quality, and ensure every data asset is audit-ready and HIPAA-compliant.</p>
      <ul class="feature-list">
        <li>Microsoft Purview implementation</li>
        <li>Data catalog &amp; lineage mapping</li>
        <li>HIPAA &amp; regulatory compliance</li>
        <li>Data quality rules &amp; monitoring</li>
        <li>Master data management</li>
        <li>Stewardship programs &amp; policies</li>
      </ul>
    </div>
    <div class="col-right">
      <div style="background:var(--navy3);border:1px solid rgba(0,180,166,0.2);border-radius:16px;padding:2rem;display:flex;flex-direction:column;gap:1.5rem;">
        <div class="stat-block">
          <span class="stat-number">100%</span>
          <span class="stat-label">HIPAA Compliance achieved</span>
        </div>
        <div class="stat-block">
          <span class="stat-number">3x</span>
          <span class="stat-label">Improvement in data quality scores</span>
        </div>
        <div class="stat-block">
          <span class="stat-number">50%</span>
          <span class="stat-label">Reduction in data incidents</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section alt reveal">
  <div class="section-wrap">
    <span class="section-tag">Our Governance Framework</span>
    <h2 class="section-title">A Structured Path to Data Trust</h2>
    <div class="card-grid-3">
      <div class="card">
        <div class="card-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg></div>
        <h3>Discover &amp; Catalog</h3>
        <p>Automated data discovery across your enterprise surfaces every asset — structured, semi-structured, and unstructured — and populates a unified, searchable data catalog.</p>
      </div>
      <div class="card">
        <div class="card-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></div>
        <h3>Classify &amp; Protect</h3>
        <p>Sensitivity labels, role-based access controls, and automated classification ensure PHI and PII are identified and protected everywhere they live in your environment.</p>
      </div>
      <div class="card">
        <div class="card-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div>
        <h3>Monitor &amp; Govern</h3>
        <p>Ongoing data quality monitoring, lineage tracking, and automated audit trails keep your governance posture strong and your organization ready for any regulatory review.</p>
      </div>
    </div>
  </div>
</section>

<section class="cta-strip reveal">
  <h2>Ready to build a trusted data foundation?</h2>
  <p>Let's establish governance that your entire organization can rely on.</p>
  <a href="<?php echo sdsol_url('/contact/'); ?>" class="btn-primary">Talk to Our Experts</a>
</section>

<?php get_footer(); ?>
