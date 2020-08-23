<?php get_header(); ?>

<?php get_template_part('partials/banner') ?>

<main>
  <div id='cards-section'>
    <?php get_template_part('partials/news') ?>
    <?php get_template_part('partials/featured') ?>
  </div>

  <div id="reviews-banner">
    <?php get_template_part('partials/quote') ?>
  </div>

  <div id="find-us">
    <div>
      <?php get_template_part('partials/findUs') ?>
    </div>
  </div>

  <div id='social-links'>
    <a href='https://www.instagram.com' class='left-icon'>
      <i class="fab fa-instagram"></i>
    </a>
    
     <a href='https://www.facebook.com' class='right-icon'>
      <i class="fab fa-facebook-f"></i>
    </a>
  </div>
</main>

<?php get_footer(); ?>