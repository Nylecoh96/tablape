<?php
defined('ABSPATH') || exit;
$page_post_id = (isset($attr['currentPostId']) &&  $attr['currentPostId'])  ? $attr['currentPostId'] : ultimate_post()->get_page_post_id(ultimate_post()->get_ID(), $attr['blockId']);
$self_post_id = 'data-selfpostid="' .( (isset($attr['currentPostId']) &&  $attr['currentPostId']) ? "yes" : "no"). '"';
$wraper_after .= '<div class="ultp-next-prev-wrap" data-pages="'.$pageNum.'" data-pagenum="1" data-blockid="'.$attr['blockId'].'" data-blockname="ultimate-post_'.$block_name.'" data-postid="'.$page_post_id.'" '.ultimate_post()->get_builder_attr($attr['queryType']).$self_post_id.'>';
    if( 1 != $pageNum) {
        $wraper_after .= ultimate_post()->next_prev();
    }
$wraper_after .= '</div>';