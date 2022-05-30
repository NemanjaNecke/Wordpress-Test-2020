<?php 
if(!is_active_sidebar( 'current-project' )) {
    return;
}
?>

    <?php dynamic_sidebar( 'current-project' ); ?>
