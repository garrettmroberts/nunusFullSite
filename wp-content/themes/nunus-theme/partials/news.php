<section>
  <h2>Nunu's News</h2>
  <div class='card'>
  <?php 
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>1)); ?>
<?php if ( $wpb_all_query->have_posts() ) : ?>
  <!-- the loop -->
  <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
      <h3><?php the_title(); ?></h3>
      <p><?php the_content(); ?></p>
  <?php endwhile; ?>
  <!-- end of the loop -->
 <?php wp_reset_postdata(); ?>
<?php endif; ?>
  </div>
</section>