<?php
get_header();
?>

<!-- Page Content -->
<div id="primary" class='container'>

<main id="content" role="main" class='container d-flex flex-row justify-content-between'>
<section class="py-5 my-4 col col-sm-9">
<?php if(have_posts(  )) : while(have_posts(  )) : the_post(  ); ?>
<?php get_template_part( 'template-parts/content' ); ?>

<?php endwhile; else : ?>
  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>
</section>
<section id="widget" class='py-5 my-4 col col-sm-3'>
  <?php 
get_sidebar( );

?>
</section>
</main>
<div class="d-flex justify-content-center">
  <nav class="pagination">
  <?php pagination_bar(); ?>
  </nav>
</div>

<?php
get_footer();
?>