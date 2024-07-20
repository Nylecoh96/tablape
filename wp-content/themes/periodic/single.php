<?php
/*
** Single Page
** Version: 1.0
*/

get_header();
useElementController();
$element_controller = new ElementController;

if (have_posts()) :
    while (have_posts()) : the_post();
        $slug = get_post_field( 'post_name', get_post() );
        $element = $element_controller->getSingleElement($slug);
        $other_elements = $element_controller->getOtherElements($slug);

 
        get_template_part("components/global/periodic-table/slug/above-the-fold", null, array(
            'element'  => $element
        ));

        get_template_part("components/global/periodic-table/slug/more-info", null, array(
            'element'  => $element,
            'others'    => $other_elements
        ));
    endwhile;
endif;

?>


<?php  get_footer(); ?>
