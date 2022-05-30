<?php 
if(!is_active_sidebar( 'maintxt' )) {
    return;
}
?>
<div class="col-11 mx-auto d-flex justify-content-center">
    <?php dynamic_sidebar( 'maintxt' ); ?>
</div>