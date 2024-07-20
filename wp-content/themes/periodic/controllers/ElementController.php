<?php
    class ElementController {
        function getAllElementsData ($slug=null, $taxonomy=null, $page=null) {

            $to_return = [];

            $tax_query = array(
                'relation' => 'AND',
                array(
                    'taxonomy'      => isset($taxonomy) ? $taxonomy->taxonomy : '',
                    'field'         => 'slug',
                    'terms'         =>  isset($taxonomy) ? $taxonomy->term : ''
                )
            );

            $payload = (object) [
                'args'  => array(
                        'post_type'         => 'post',
                        's'                 => isset($slug) ? $slug : null,
                        'orderby' => 'ID',
                        'order'   => 'ASC',
                        'posts_per_page'    => -1,
                        'tax_query'     => isset($taxonomy) ? $tax_query : null
                    )
            ];
			
            $query = new WP_Query( $payload->args );
            $posts = $query->posts;
            if (count($posts)) {
                foreach ($posts as $key => $post) {
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID));
                    $taxonomies = getAllTaxonomies($post->ID); //returns an object
                    $audio = get_field('audio', $post->ID);
                    $post_obj = (object) [
                        //for filtering
                        'name'                  => $post->post_title,
                        'slug'                  => $post->post_name,
                        'chemical_symbol'       => get_post_meta($post->ID, 'chemical_symbol', true),
                        'identifier'            => get_post_meta($post->ID, 'chemical_symbol', true),
                        'row'                   => $taxonomies->element_row->name, //group items via element period
                        'column'                => get_post_meta($post->ID, 'column', true),
                        'filters'               => (object) [
                            'group'             => $taxonomies->element_group,
                            'period'            => $taxonomies->element_period,
                            'type'              => $taxonomies->element_type,
                            'classification'    => $taxonomies->element_classification,
                            'block'             => $taxonomies->element_block,
                            'form'             => $taxonomies->element_form,
                            'melting_point_k'   => get_post_meta($post->ID, 'melting_point_k', true),
                            'boiling_point_k'   => get_post_meta($post->ID, 'boiling_point_k', true),
                        ],
                        /* main info */
                        'main_info'         => null,


                        //inner page data
                        'fact_table'                    => null, //obj
                        'uses_and_properties'           => null, //obj
                        'history'                       => null, //wysiwyg
                        'atomic_data'                   => null, //obj
                        'oxidation_states_and_isotopes' => null, //wysiwyg
                        'supply_risk'                   => null, //obj
                        'pressure_and_temperature_data' => null, //obj
                        'podcast'                       => null, //wysiwyg
                        'video'                         => null, //field / string
                        'references'                    => null, //wysiwyg
                    ];

                    switch ($page) {
                        case 'home':
                            $post_obj->main_info = (object) [
                                'sequence'              => get_post_meta($post->ID, 'sequence', true),
                                'atomic_number'         => get_post_meta($post->ID, 'atomic_number', true),
                                'atomic_mass'           => get_post_meta($post->ID, 'relative_atomic_mass', true),
                                'name'                  => $post->post_title,
                                'chemical_symbol'       => get_post_meta($post->ID, 'chemical_symbol', true),
                                'density'               => get_post_meta($post->ID, 'density', true),
                                'melting_point'         => get_post_meta($post->ID, 'melting_point', true),
                                'boiling_point'         => get_post_meta($post->ID, 'boiling_point', true),
                                'key_isotopes'          => get_post_meta($post->ID, 'key_isotopes', true),
                                'energy_levels'         => get_post_meta($post->ID, 'energy_levels', true),
                                '1st_ionisation_energy' => get_post_meta($post->ID, '1st_ionisation_energy', true),
                                'electron_configuration'=> get_post_meta($post->ID, 'electron_configuration', true),
                                'taxonomies'            => $taxonomies
                            ];
                            break;
                        case 'history':
                            $post_obj->main_info = (object) [
                                'sequence'              => get_post_meta($post->ID, 'sequence', true),
                                'atomic_number'         => get_post_meta($post->ID, 'atomic_number', true),
                                'atomic_mass'           => get_post_meta($post->ID, 'relative_atomic_mass', true),
                                'name'                  => $post->post_title,
                                'chemical_symbol'       => get_post_meta($post->ID, 'chemical_symbol', true),
                                'origin_of_the_name'    => get_post_meta($post->ID, 'origin_of_the_name', true),
                                'discovery_date'        => get_post_meta($post->ID, 'discovery_date', true),
                                'discovery_date_label'  => get_post_meta($post->ID, 'discovery_date_label', true),
                                'discovered_by'         => get_post_meta($post->ID, 'discovered_by', true),
                                'taxonomies'            => $taxonomies
                            ];
                            break;
                        case 'podcasts':
                            $post_obj->main_info = (object) [
                                'sequence'              => get_post_meta($post->ID, 'sequence', true),
                                'atomic_number'         => get_post_meta($post->ID, 'atomic_number', true),
                                'atomic_mass'           => get_post_meta($post->ID, 'relative_atomic_mass', true),
                                'name'                  => $post->post_title,
                                'chemical_symbol'       => get_post_meta($post->ID, 'chemical_symbol', true),
                                'audio'                 => isset($audio) && gettype($audio) == 'array' ? $audio['url'] : '',
                                'media'                 => true,
                                'taxonomies'            => $taxonomies
                            ];
                            break;
                        case 'videos':
                            $post_obj->main_info = (object) [
                                'sequence'              => get_post_meta($post->ID, 'sequence', true),
                                'atomic_number'         => get_post_meta($post->ID, 'atomic_number', true),
                                'atomic_mass'           => get_post_meta($post->ID, 'relative_atomic_mass', true),
                                'name'                  => $post->post_title,
                                'chemical_symbol'       => get_post_meta($post->ID, 'chemical_symbol', true),
                                'video'                 => get_post_meta($post->ID, 'video', true),
                                'video_description'     => get_post_meta($post->ID, 'video_description_content', true),
                                'media'                 => true,
                                'taxonomies'            => $taxonomies
                            ];
                            break;
                    }

                    //if slug has value
                    
                    if (isset($slug)) {
                        $post_obj->main_info = (object) [
                            'sequence'              => get_post_meta($post->ID, 'sequence', true),
                            'atomic_mass'               => get_post_meta($post->ID, 'relative_atomic_mass', true),
                            'chemical_symbol'           => get_post_meta($post->ID, 'chemical_symbol', true),
                            'atomic_number'             => get_post_meta($post->ID, 'atomic_number', true),
                            'energy_levels'             => get_post_meta($post->ID, 'energy_levels', true),
                            'density'                   => get_post_meta($post->ID, 'density', true),
                            'melting_point'             => get_post_meta($post->ID, 'melting_point', true),
                            'boiling_point'             => get_post_meta($post->ID, 'boiling_point', true),
                            'electron_configuration'    => get_post_meta($post->ID, 'electron_configuration', true),
                            'key_isotopes'              => get_post_meta($post->ID, 'key_isotopes', true),
                            'first_ionization_energy'   => get_post_meta($post->ID, '1st_ionisation_energy', true),
                            'discovery_date'            => get_post_meta($post->ID, 'discovery_date_label', true),
                            'discovered_by'             => get_post_meta($post->ID, 'discovered_by', true),
                            'audio'                     => isset($audio) && gettype($audio) == 'array' ? $audio['url'] : '',
                            'element_type'              => $taxonomies->element_type,
                            'image'                     => isset($image) && gettype($image) == 'array' ? $image[0] : null
                        ];
                        $post_obj->fact_table = (object) [
                            'group'                     => $taxonomies->element_group,
                            'period'                    => $taxonomies->element_period,
                            'block'                     => $taxonomies->element_block,
                            'atomic_number'             => get_post_meta($post->ID, 'atomic_number', true),
                            'state_at_20_deg'           => get_post_meta($post->ID, 'chemical_symbol', true),
                            'audio'                     => isset($audio) && gettype($audio) == 'array' ? $audio['url'] : '',
                            'electron_configuration'    => get_post_meta($post->ID, 'electron_configuration', true),
                            'chem_spider_id'            => get_post_meta($post->ID, 'chemspiderid', true),
                            'melting_point'             => get_post_meta($post->ID, 'melting_point', true),
                            'boiling_point'             => get_post_meta($post->ID, 'boiling_point', true),
                            'density'                   => get_post_meta($post->ID, 'density', true),
                            'relative_atomic_mass'      => get_post_meta($post->ID, 'relative_atomic_mass', true),
                            'key_isotopes'              => get_post_meta($post->ID, 'key_isotopes', true),
                            'cas_number'                => get_post_meta($post->ID, 'cas_number', true),
                        ];
                        $post_obj->uses_and_properties = (object) [
                            'image_explanation' => get_post_meta($post->ID, 'image_explanation', true),
                            'appearance'        => get_post_meta($post->ID, 'appearance', true),
                            'uses'              => get_post_meta($post->ID, 'uses', true)
                        ];
                        $post_obj->history = get_post_meta($post->ID, 'history', true);
                        $post_obj->atomic_data = (object) [
                            'atomic_radius_non_bonded'  => get_post_meta($post->ID, 'atomic_radius_non_bonded', true),
                            'electron_affinity'         => get_post_meta($post->ID, 'electron_affinity', true),
                            'covalent_radius'           => get_post_meta($post->ID, 'covalent_radius', true),
                            'electronegativity'         => get_post_meta($post->ID, 'electronegativity', true),
                            'first_ionisation_energy'   => get_post_meta($post->ID, '1st_ionisation_energy', true),
                            'second_ionisation_energy'  => get_post_meta($post->ID, '2nd_ionisation_energy', true),
                            'third_ionisation_energy'   => get_post_meta($post->ID, '3rd_ionisation_energy', true),
                            'fourth_ionisation_energy'  => get_post_meta($post->ID, '4th_ionisation_energy', true),
                            'fifth_ionisation_energy'    => get_post_meta($post->ID, '5th_ionisation_energy', true),
                            'sixth_ionisation_energy'   => get_post_meta($post->ID, '6th_ionisation_energy', true),
                            'seventh_ionisation_energy' => get_post_meta($post->ID, '7th_ionisation_energy', true),
                            'eighth_ionisation_energy'  => get_post_meta($post->ID, '8th_ionisation_energy', true),
                        ];
                        $post_obj->oxidation_states_and_isotopes = get_post_meta($post->ID, 'oxidation_states_and_isotopes_content', true);
                        $post_obj->supply_risk = (object) [
                            'relative_supply_risk'            => get_post_meta($post->ID, 'relative_supply_risk', true),
                            'crustal_abundance'               => get_post_meta($post->ID, 'crustal_abundance_ppm', true),
                            'recycling_rate'                  => get_post_meta($post->ID, 'recycling_rate', true),
                            'substitutability'                => get_post_meta($post->ID, 'subtitutability', true),
                            'production_concentration'        => get_post_meta($post->ID, 'production_concentration', true),
                            'top_3_producers'                 => get_post_meta($post->ID, 'top_3_producers', true),
                            'top_3_reserve_holders'                      => get_post_meta($post->ID, 'top_3_reserve_holders', true),
                            'political_stability_of_top_producer'        => get_post_meta($post->ID, 'political_stability_of_top_producer', true),
                            'political_stability_of_top_reserve_holder'  => get_post_meta($post->ID, 'political_stability_of_top_reserve_holder', true)
                        ];
                        $post_obj->pressure_and_temperature_data = (object) [
                            'specific_heat_capacity'    => get_post_meta($post->ID, 'specific_heat_capacity', true),
                            'shear_modulus'             => get_post_meta($post->ID, 'shear_modulus', true),
                            'youngs_modulus'            => get_post_meta($post->ID, 'youngs_modulus', true),
                            'bulk_modulus'              => get_post_meta($post->ID, 'bulk_modulus', true),
                            'pressure_400k'             => get_post_meta($post->ID, 'pressure_400k', true),
                            'pressure_600k'             => get_post_meta($post->ID, 'pressure_600k', true),
                            'pressure_800k'             => get_post_meta($post->ID, 'pressure_800k', true),
                            'pressure_1000_k'           => get_post_meta($post->ID, 'pressure_1000_k', true),
                            'pressure_1200_k'           => get_post_meta($post->ID, 'pressure_1200_k', true),
                            'pressure_1400_k'           => get_post_meta($post->ID, 'pressure_1400_k', true),
                            'pressure_1600_k'           => get_post_meta($post->ID, 'pressure_1600_k', true),
                            'pressure_1800_k'           => get_post_meta($post->ID, 'pressure_1800_k', true),
                            'pressure_2000_k'           => get_post_meta($post->ID, 'pressure_2000_k', true),
                            'pressure_2200_k'           => get_post_meta($post->ID, 'pressure_2200_k', true),
                            'pressure_2400_k'           => get_post_meta($post->ID, 'bulk_modulus', true),
                        ];
                        $post_obj->podcast      = get_post_meta($post->ID, 'podcast', true);
                        $post_obj->video        = get_post_meta($post->ID, 'video', true);
                        $post_obj->references   = get_post_meta($post->ID, 'references', true);
                    }

                    array_push($to_return, $post_obj);
                }
            }
            wp_reset_postdata();

            return $to_return;
        }

        function getAllTaxonomy ($taxonomy) {
            $to_return = [];
            $terms = get_terms( array(
                'taxonomy' => $taxonomy,
                'hide_empty' => false,
            ));

            if (count($terms) > 0) {
                foreach ($terms as $term){
                    $obj = (object) [
                        'name'      => $term->name,
                        'slug'      => $term->slug
                    ];

                    array_push($to_return, $obj);
                }
            }


            return $to_return;
        }

        function getElements ($page) {
            $payload = [];
            $temp_rows = [];
            $rows = $this->getAllTaxonomy('element-row');

            usort($rows, function ($a, $b) {
                return $a->name > $b->name;
            });

            if (count($rows) > 0) {
                foreach ($rows as $key => $row) {
                    $row_obj = (object) [
                        'name'              => 'Row ' . $row->name,
                        'identifier'        => 'row-' . $row->slug,
                        'elements'          => []
                    ];
                    $query_args = (object) [
                        'taxonomy'      => 'element-row',
                        'term'          => $row->name
                    ];

                    $elements = $this->getAllElementsData(null, $query_args, $page);

                    foreach ($elements as $key => $element) {
                        array_push($row_obj->elements, $element);
                    }

                    array_push($temp_rows, $row_obj);
                }
            }

            switch ($page) {
                case 'home':
                    $payload = (object) [
                        'filters'   => getAllFilters(),
                        'rows'      => $temp_rows
                    ];
                    break;
                case 'history':
                    $payload = (object) [
                        'filters'   => null,
                        'rows'      => $temp_rows
                    ];
                    break;
                case 'podcasts':
                    $payload = (object) [
                        'filters'   => null,
                        'rows'      => $temp_rows
                    ];
                    break;
                case 'videos':
                    $payload = (object) [
                        'filters'   => null,
                        'rows'      => $temp_rows
                    ];
                    break;
            }

            return $payload;
        }

        function getSingleElement ($slug) {
            $to_return = null;
            if ($slug) {
                $to_return = $this->getAllElementsData($slug);
            }
            return $to_return[0];
        }

        function getOtherElements ($slug) {
            $to_return = [];

            $payload = (object) [
                'args'  => array(
                    'post_type'         => 'post',
                    'orderby' => 'title',
                    'order'   => 'ASC',
                    'posts_per_page'    => -1
                )
            ];
            $query = new WP_Query( $payload->args );
            $posts = $query->posts;

            if (count($posts) > 0) {
                foreach ($posts as $key => $post) {
                    $obj = (object) [
                        'title'         => $post->post_title,
                        'slug'          => $post->post_name,
                        'permalink'     => '/' . $post->post_name
                    ];
                    array_push($to_return, $obj);

                }
            }
            return $to_return;
        }
    }

?>
