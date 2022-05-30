

<footer>
    <div class="d-flex flex-column align-items-center mt-3">
       <?php 
            if(is_active_sidebar( 'footer-info' )) {
                dynamic_sidebar( 'footer-info' ); 
            }
           ?>
    </div>
    
</footer>
</div><!--container-fluid-->
<?php
wp_footer();
?>
</body>
</html>