<?php
/**
 * default footer file
 *
 * @version 1.0
 */
?>  
    <div class="footer">
        <div id="footer-sidebar1">
            <?php
            // if(is_active_sidebar('footer-sidebar-1')){
            //     dynamic_sidebar('footer-sidebar-1');
            // }
            // else {
            //     include get_theme_file_path( '/components/global/bottom-bar.php');
            // }
            include get_theme_file_path( '/components/global/bottom-bar.php');
            ?>
<!--             <div class="footer__bottom">
                <span class="footer__copyright"> Copyright © 2022 - www.TablaPe.com | All Rights Reserved </span>
            </div>
 -->        </div>
    </div>
    <?php wp_footer(); ?>
 
