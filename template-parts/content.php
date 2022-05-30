<article id="post-<?php the_ID();?><?php post_class();?>" class="container-fluid mb-5 border-bottom">

<?php the_title( '<h2 class="font-weight-light text-left roboto" >', '</h2>' ); ?>

<div class="d-flex flex-row" id="thumb-to-bottom">
  <div class="d-flex flex-column">
    <div class="d-flex flex-row align-items-center">
      <div class="mr-1">
        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
        <?php echo get_avatar( get_the_author_email(), '40' ); ?>
        </a>
      </div>
      <div>
      <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
      <?php echo get_author_name(  ); ?>
      </a>
      </div>
    </div>
    
    <?php  echo '<p class="excerpt">' . get_the_content( ) . '</p>' ; ?>
  </div>
  <div class="d-block my-auto pl-2">
  <?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif; ?>
  </div>

  </div>
     
    <?php if( comments_open() ): ?>
    <?php comments_template(); ?>
    <?php endif; ?>
  </article>
