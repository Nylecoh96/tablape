<?php
/**
 * Template Name: History
 *
 * @version 1.0
 */
get_header(); ?>

<div class="main">
    <div class="main__header container">
        <h1 class="main__header-title">Periodic Table History</h1>
    </div>
</div>

<?php
    include get_theme_file_path( '/components/global/periodic-table/element-box.php');

    get_footer();
?>
