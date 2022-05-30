<?php
get_header();
?>

<!-- Page Content -->
<div id="primary" class='container'>

<main id="content" role="main" class='row'>
<section class="py-5 col col-sm-9">

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

</section>
<section class='py-5 col col-sm-3 justify-content-center d-flex flex-column'>
  <?php 
get_sidebar( );
?>
</section>
</main>

<?php
get_footer();
?>