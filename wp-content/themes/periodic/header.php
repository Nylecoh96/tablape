<?php
/**
 * default header file
 *
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg" >
<head>


	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BV335R46Y4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BV335R46Y4');
</script>
    <?php //do_action("myheader");?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php wp_head(); ?>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript">
        var theme_path = "<?php echo get_theme_file_uri(); ?>";
    </script>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="__p">

    <?php include get_theme_file_path( '/components/global/top-bar.php'); ?>