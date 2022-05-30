<?php 
if(!is_active_sidebar( 'current-status' )) {
    return;
}
?>

    <?php dynamic_sidebar( 'current-status' ); ?>
