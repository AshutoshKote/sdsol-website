<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav>
  <div class="nav-brand">
    <a href="<?php echo sdsol_url('/'); ?>" class="nav-logo-link">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="SD Sol" class="nav-logo-img"/>
    </a>
    <div class="nav-tagline">Intelligence Applied</div>
  </div>
  <ul class="nav-center">
    <li class="nav-item">
      <a href="<?php echo sdsol_url('/services/'); ?>">Services <span class="chevron">▼</span></a>
      <div class="dropdown">
        <a href="<?php echo sdsol_url('/service-data-infrastructure/'); ?>">Data Infrastructure + Architecture</a>
        <a href="<?php echo sdsol_url('/service-data-governance/'); ?>">Data Governance</a>
        <a href="<?php echo sdsol_url('/service-data-engineering/'); ?>">Data Engineering Services</a>
        <a href="<?php echo sdsol_url('/service-data-analytics/'); ?>">Data Analytics Services</a>
        <a href="<?php echo sdsol_url('/service-ai-ml/'); ?>">AI / ML Solutions</a>
        <a href="<?php echo sdsol_url('/service-advisory/'); ?>">Advisory &amp; Strategy</a>
      </div>
    </li>
    <li class="nav-item">
      <a href="<?php echo sdsol_url('/industries/'); ?>">Industries <span class="chevron">▼</span></a>
      <div class="dropdown">
        <a href="<?php echo sdsol_url('/industry-healthcare/'); ?>">Healthcare</a>
        <a href="<?php echo sdsol_url('/industry-life-sciences/'); ?>">Life Sciences</a>
        <a href="<?php echo sdsol_url('/industry-hospital-systems/'); ?>">Hospital Systems</a>
        <a href="<?php echo sdsol_url('/industry-payers/'); ?>">Payers &amp; Insurers</a>
      </div>
    </li>
    <li class="nav-item"><a href="<?php echo sdsol_url('/success-stories/'); ?>">Success Stories</a></li>
    <li class="nav-item"><a href="<?php echo sdsol_url('/technologies/'); ?>">Technologies</a></li>
    <li class="nav-item"><a href="<?php echo sdsol_url('/about/'); ?>">About</a></li>
  </ul>
  <div class="nav-right">
    <a href="<?php echo sdsol_url('/contact/'); ?>" class="nav-link">Contact</a>
    <a href="<?php echo sdsol_url('/contact/'); ?>" class="btn-nav">Talk to Our Experts</a>
  </div>
</nav>
