<?php

    function getRanges ($page = null) {
        $to_return = [];

        $args = array(
            'post_type'         => 'range',
            'post_status'       => 'publish',
            'order'             => 'ASC',
            'posts_per_page'    => isset($limit) ? $limit : -1
        );

        $query = new WP_Query($args);
        $posts = $query->posts;

        if (count($posts) > 0) {
            foreach ($posts as $key => $post) {
                $post_obj = (object) [
                    'name' => $post->post_title,
                    'slug' => $post->post_name,
                    'minimum_value' => get_post_meta($post->ID, 'minimum_value', true),
                    'maximum_value' => get_post_meta($post->ID, 'maximum_value', true),
                    'taxonomy' => getTaxonomyName($post->ID, 'range-category')
                ];

                if (isset($page)) {
                    if ($post_obj->taxonomy->slug == $page) {
                        array_push($to_return, $post_obj);    
                    } 
                }
                else {
                    array_push($to_return, $post_obj);
                }
            }

            return $to_return;
        }
        
        
    }

    function getTaxonomyName ($post_id, $term) {
        $to_return = (object) [
            'name'          => null,
            'slug'          => null,
            'color'         => ''
        ];

        $terms = get_the_terms($post_id, $term);

        if (gettype($terms) == 'array') { //boolean kasi yung ibang wala pang laman
            if (count($terms) > 0) {
                $to_return->color = get_field('hex_code', $terms[0]);
                $to_return->name = $terms[0]->name;
                $to_return->slug = $terms[0]->slug;
            }
        }
        return $to_return;
    }


    function getAllTaxonomies ($post_id) { //get all taxonomies of a post
        $element_classification = getTaxonomyName($post_id, 'element-classification');
        $element_type = getTaxonomyName($post_id, 'element-type');
        $element_group = getTaxonomyName($post_id, 'element-group');
        $element_form = getTaxonomyName($post_id, 'element-form');
        $element_period = getTaxonomyName($post_id, 'element-period');
        $element_block = getTaxonomyName($post_id, 'element-block');
        $element_row = getTaxonomyName($post_id, 'element-row');

        $to_return = (object) [
            'element_classification'    => $element_classification,
            'element_type'              => $element_type,
            'element_group'             => $element_group,
            'element_form'              => $element_form,
            'element_period'            => $element_period,
            'element_block'             => $element_block,
            'element_row'               => $element_row
        ];
        return $to_return;
    }

    function getSpecificTaxonomy ($taxonomy_name) {
        $to_return = [];
        $terms = get_terms( $taxonomy_name , array(
            'hide_empty' => false,
        ));

        if (count($terms) > 0) {
            foreach ($terms as $key => $term) {
                $color = get_field('hex_code', $term);
                $sort_order = get_field('sort_order', $term);
                $obj = (object) [
                    'name'          => $term->name,
                    'slug'          => $term->slug,
                    'id'            => $term->term_id,
                    'sort_order'    => isset($sort_order) ? $sort_order : 0 ,
                    'color'         => isset($color) ? $color : ''
                ];

                if ($term->name != 'Both') {
                    array_push($to_return, $obj);
                }
            }
        }
        return $to_return;
    }

    function sortItems ($items) {
      $to_sort = $items;

      usort($to_sort, function ($a, $b) {
          return $a->name > $b->name;
      });

      return $to_sort;
    }

    function sortItemsId ($items) {
      $to_sort = $items;

      usort($to_sort, function ($a, $b) {
          return $a->sort_order > $b->sort_order;
      });


      return $to_sort;
    }


    function getAllFilters () { //get all categories
        $element_classification = getSpecificTaxonomy('element-classification');
        $element_type = getSpecificTaxonomy('element-type');
        $element_group = getSpecificTaxonomy('element-group');
        $element_form = getSpecificTaxonomy('element-form');
        $element_period = getSpecificTaxonomy('element-period');
        $element_block = getSpecificTaxonomy('element-block');
        $element_row = getSpecificTaxonomy('element-row');

        $to_return = (object) [
            'element_classifications'    => sortItems($element_classification),
            'element_types'              => sortItemsId($element_type),
            'element_groups'             => sortItems($element_group),
            'element_forms'              => sortItems($element_form),
            'element_periods'            => sortItems($element_period),
            'element_blocks'             => sortItemsId($element_block),
            'element_rows'               => sortItems($element_row)
        ];
        return $to_return;
    }
?>
