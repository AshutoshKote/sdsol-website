<?php get_header(); ?>

<section class="page-hero">
  <div class="page-hero-content">
    <h1><span class="hl">Healthcare</span></h1>
    <p>From population health to clinical analytics — unlocking the full value of healthcare data.</p>
  </div>
</section>

<section class="section-wrap">
  <div class="two-col">
    <div class="reveal">
      <span class="section-tag">Our Focus</span>
      <h2 class="section-title">Clinical &amp; Operational Intelligence</h2>
      <p class="section-sub">Healthcare organizations are sitting on vast, fragmented data assets — spread across EHRs, claim systems, lab platforms, and more. SD Sol helps you integrate, govern, and activate that data to drive meaningful clinical and operational outcomes. We understand FHIR, HL7, HIPAA, and the nuances of healthcare data — so you don't have to start from scratch.</p>
      <ul class="feature-list" style="margin-top:2rem;">
        <li>EHR integration &amp; FHIR compliance</li>
        <li>Population health management</li>
        <li>Care gap identification</li>
        <li>Social determinants of health analytics</li>
        <li>Quality measure reporting (HEDIS, STARS)</li>
        <li>Patient journey analytics</li>
      </ul>
    </div>
    <div class="reveal" style="display:flex; align-items:center; justify-content:center;">
      <div style="background:var(--navy2); border:1px solid rgba(0,180,166,0.2); border-radius:16px; padding:2.5rem; width:100%;">
        <h3 style="color:var(--teal); margin-bottom:1.5rem; font-size:1.1rem;">Healthcare Data at a Glance</h3>
        <div style="display:flex; flex-direction:column; gap:1.5rem;">
          <div style="display:flex; align-items:flex-start; gap:1rem;">
            <div style="font-size:2rem; font-weight:800; color:var(--teal); min-width:80px;">80%</div>
            <div>
              <div style="color:var(--text); font-weight:600; font-size:0.95rem;">of Clinical Data is Unstructured</div>
              <div style="color:var(--muted); font-size:0.85rem; margin-top:0.2rem;">Notes, imaging, and narratives locked in systems that can't talk to each other.</div>
            </div>
          </div>
          <div style="display:flex; align-items:flex-start; gap:1rem;">
            <div style="font-size:2rem; font-weight:800; color:var(--teal); min-width:80px;">$935B</div>
            <div>
              <div style="color:var(--text); font-weight:600; font-size:0.95rem;">Wasted Annually in US Healthcare</div>
              <div style="color:var(--muted); font-size:0.85rem; margin-top:0.2rem;">Poor data quality and fragmentation drive enormous inefficiency across the system.</div>
            </div>
          </div>
          <div style="display:flex; align-items:flex-start; gap:1rem;">
            <div style="font-size:2rem; font-weight:800; color:var(--teal); min-width:80px;">3x</div>
            <div>
              <div style="color:var(--text); font-weight:600; font-size:0.95rem;">Better Outcomes with Data-Driven Care</div>
              <div style="color:var(--muted); font-size:0.85rem; margin-top:0.2rem;">Organizations leveraging advanced analytics see significantly better patient outcomes.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-wrap alt">
  <div style="text-align:center; margin-bottom:3rem;" class="reveal">
    <span class="section-tag">Capabilities</span>
    <h2 class="section-title">How We Serve Healthcare Organizations</h2>
    <p class="section-sub">Specialized capabilities built for the unique complexity of healthcare data environments.</p>
  </div>
  <div class="card-grid-3">
    <div class="card reveal">
      <div class="card-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></div>
      <h3>Clinical Analytics</h3>
      <p>Transform raw clinical data into actionable intelligence. We build analytics platforms that surface insights from EHRs, labs, imaging, and patient-generated data — enabling evidence-based care decisions at scale.</p>
      <a href="<?php echo sdsol_url('/contact/'); ?>" class="card-link">Learn More →</a>
    </div>
    <div class="card reveal">
      <div class="card-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
      <h3>Population Health</h3>
      <p>Identify at-risk populations before they deteriorate. Our population health platforms integrate clinical, claims, and SDOH data to stratify risk, close care gaps, and improve health outcomes across your patient panel.</p>
      <a href="<?php echo sdsol_url('/contact/'); ?>" class="card-link">Learn More →</a>
    </div>
    <div class="card reveal">
      <div class="card-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
      <h3>Quality Measures</h3>
      <p>Automate HEDIS, STARS, and other quality measure calculations with precision. We build robust pipelines that ensure accurate measure computation, gap identification, and regulatory reporting — on time, every time.</p>
      <a href="<?php echo sdsol_url('/contact/'); ?>" class="card-link">Learn More →</a>
    </div>
  </div>
</section>

<div class="cta-strip reveal">
  <h2>Ready to unlock the full value of your healthcare data?</h2>
  <p>SD Sol combines clinical domain expertise with modern data engineering to deliver outcomes that matter.</p>
  <a href="<?php echo sdsol_url('/contact/'); ?>" class="btn-primary">Talk to Our Experts →</a>
</div>

<?php get_footer(); ?>
