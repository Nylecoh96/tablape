<?php
    function callUnclassedControllers () {
        require_once( get_template_directory() . '/controllers/GlobalController.php' );
        require_once( get_template_directory() . '/controllers/SetupController.php' );
        require_once( get_template_directory() . '/controllers/CustomPostTypeController.php' );
        require_once( get_template_directory() . '/controllers/WidgetController.php' );
    }
    
    function callClassedControllers () {
        function useElementController () {
            require_once( get_template_directory() . '/controllers/ElementController.php' );
        }
    }

    callUnclassedControllers();
    callClassedControllers();

?>