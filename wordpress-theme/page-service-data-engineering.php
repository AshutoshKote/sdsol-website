<?php get_header(); ?>

<section class="page-hero">
  <div class="page-hero-content">
    <h1>Data <span class="hl">Engineering</span> Services</h1>
    <p>Reliable, scalable data pipelines that keep your data fresh, accurate, and always ready for insights.</p>
  </div>
</section>

<section class="section reveal">
  <div class="section-wrap two-col">
    <div class="col-left">
      <span class="section-tag">What We Deliver</span>
      <h2 class="section-title">Pipelines That Power Your Entire Data Stack</h2>
      <p class="section-sub">Healthcare data comes from dozens of sources — EHRs, claims systems, labs, devices, and more. We build the engineering layer that brings it all together: reliable, observable, and built to handle the complexity of healthcare data at scale.</p>
      <ul class="feature-list">
        <li>ETL / ELT pipeline development</li>
        <li>Real-time streaming with Kafka / Event Hubs</li>
        <li>API &amp; system integrations</li>
        <li>Data quality validation frameworks</li>
        <li>CI/CD for data pipelines</li>
        <li>Managed pipeline operations</li>
      </ul>
    </div>
    <div class="col-right">
      <div style="background:var(--navy3);border:1px solid rgba(0,180,166,0.2);border-radius:16px;padding:2rem;display:flex;flex-direction:column;gap:1.5rem;">
        <div class="stat-block">
          <span class="stat-number">1B+</span>
          <span class="stat-label">Records processed daily</span>
        </div>
        <div class="stat-block">
          <span class="stat-number">99.95%</span>
          <span class="stat-label">Pipeline reliability</span>
        </div>
        <div class="stat-block">
          <span class="stat-number">40%</span>
          <span class="stat-label">Faster time-to-insight</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section alt reveal">
  <div class="section-wrap">
    <span class="section-tag">Technologies We Use</span>
    <h2 class="section-title">The Best Tools for the Job</h2>
    <div class="tech-badges">
      <span class="tech-badge">Azure Data Factory</span>
      <span class="tech-badge">Databricks</span>
      <span class="tech-badge">Apache Spark</span>
      <span class="tech-badge">Apache Kafka</span>
      <span class="tech-badge">Azure Event Hubs</span>
      <span class="tech-badge">dbt</span>
      <span class="tech-badge">Airflow</span>
      <span class="tech-badge">Python</span>
      <span class="tech-badge">SQL</span>
      <span class="tech-badge">Talend</span>
      <span class="tech-badge">Informatica</span>
      <span class="tech-badge">Microsoft Fabric</span>
    </div>
  </div>
</section>

<section class="cta-strip reveal">
  <h2>Let's build pipelines that just work.</h2>
  <p>Reliable data engineering is the backbone of every great analytics and AI initiative.</p>
  <a href="<?php echo sdsol_url('/contact/'); ?>" class="btn-primary">Talk to Our Experts</a>
</section>

<?php get_footer(); ?>
