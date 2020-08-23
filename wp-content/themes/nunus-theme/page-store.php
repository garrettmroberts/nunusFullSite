<?php get_header(); ?>
  <main>
  <div className='storeBuffer'></div>
    <?php the_content();
      wp_link_pages( array( 
      // 'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'edge' ),
      'after'             => '</div>',
      'link_before'       => '<span>',
      'link_after'        => '</span>',
      'pagelink'          => '%',
      'echo'              => 1
      ) ); ?>
    <div className='storeBuffer'></div>
  </main>
<?php get_footer(); ?>