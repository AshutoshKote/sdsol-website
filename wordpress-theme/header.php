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
        <a href="<?php echo sdsol_url('/services/ai-ml/'); ?>">AI &amp; Machine Learning</a>
        <a href="<?php echo sdsol_url('/services/data-engineering/'); ?>">Data Engineering &amp; Strategy</a>
        <a href="<?php echo sdsol_url('/services/advanced-analytics/'); ?>">Advanced Analytics</a>
        <a href="<?php echo sdsol_url('/services/cloud-infrastructure/'); ?>">Cloud Infrastructure</a>
      </div>
    </li>
    <li class="nav-item">
      <a href="<?php echo sdsol_url('/success-stories/'); ?>">Success Stories <span class="chevron">▼</span></a>
      <div class="dropdown">
        <a href="<?php echo sdsol_url('/success-stories/case-studies/'); ?>">Case Studies</a>
      </div>
    </li>
    <li class="nav-item">
      <a href="<?php echo sdsol_url('/insights/'); ?>">Insights <span class="chevron">▼</span></a>
      <div class="dropdown">
        <a href="<?php echo sdsol_url('/insights/blogs/'); ?>">Blogs</a>
        <a href="<?php echo sdsol_url('/insights/resources/'); ?>">Resources</a>
      </div>
    </li>
    <li class="nav-item">
      <a href="<?php echo sdsol_url('/about/'); ?>">About <span class="chevron">▼</span></a>
      <div class="dropdown">
        <a href="<?php echo sdsol_url('/about/our-mission/'); ?>">Our Mission</a>
        <a href="<?php echo sdsol_url('/about/the-team/'); ?>">The Team</a>
        <a href="<?php echo sdsol_url('/about/careers/'); ?>">Careers</a>
      </div>
    </li>
    <li class="nav-item"><a href="<?php echo sdsol_url('/contact/'); ?>">Contact Us</a></li>
  </ul>
  <div class="nav-right">
    <a href="<?php echo sdsol_url('/contact/'); ?>" class="btn-nav">Talk to Our Experts</a>
  </div>
</nav>
