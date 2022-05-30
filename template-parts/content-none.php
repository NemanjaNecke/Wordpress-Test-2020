<article id="post-<?php the_ID();?><?php post_class();?>">
  <header class="text-center">
    <h2 class="font-weight-light"><?php esc_html_e( '404', 'main_test_child-theme' ); ?></h2>
    </header>
    <p class="text-center"><?php esc_html_e( 'Sorry no content found', 'main_test_child-theme' ) ?></p>
    <p><?php echo get_search_form(  ); ?></p>
  </article>
