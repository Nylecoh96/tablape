<?php /* Template Name: about-us */ ?>

<?php get_header(); ?>
<div class="element-slug-info">
    <div class="element-slug-info__wrapper container">
        <div class="element-slug-info__top">
            <h1 class="" style="text-align: center;"><?php the_title(); ?></h1>
        </div>
        <div class="element-slug-info__bottom">
            <?php
            // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <div class="entry-content-page">
                    <?php the_content(); ?> <!-- Page Content -->
                </div><!-- .entry-content-page -->

            <?php
            endwhile; //resetting the page loop
            //wp_reset_query(); //resetting the page query
            ?>
        </div>
    </div><!-- #content -->         
</div><!-- #container -->

<?php get_footer(); ?>
