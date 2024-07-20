<?php $payload = (count($args) > 0) ? (object) $args : null; ?>

<div class="element-slug-above" style="background-color: <?= $payload->element->main_info->element_type->color; ?>">
    <div class="element-slug-above__wrapper container">
        <div class="element-slug-above__bottom element--style ">
            <div class="element-slug-above__image">
                <?php 
                 $seq      = $payload->element->main_info->atomic_number ; 
                 $nextitem = "" ;
                 $previtem = "" ;

                 $args = array(
                        'post_type'     => 'post',
                        'meta_key'      => 'atomic_number',
                        'meta_value'    => $seq-1,
                        'posts_per_page'    => -1
                    );

                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        $previtem =  get_the_title();
                    }
                wp_reset_postdata();

                 $args = array(
                        'post_type'     => 'post',
                        'meta_key'      => 'atomic_number',
                        'meta_value'    => $seq+1,
                        'posts_per_page'    => -1
                    );

                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        $nextitem =  get_the_title();
                    }
                wp_reset_postdata();

                // echo get_the_ID();

                // echo '<pre>';
                // print_r($payload);
                // echo '</pre>';
                ?>

                <div class="element-slug-above__image-info" style="width:250px ;margin-left: -15px;">
                     <div style="float:left">
                      <?php if ($previtem != "" ) { ?>  
                      <img src="<?= get_template_directory_uri() . '/assets/images/prev.png'; ?>" style="height: 35px;width: 25px; border:none"/>  
                       <?php } ?>  
                     </div>
                     <div style="float:left;">
                        <?php if ($previtem != "" ) { ?>  
                            <a href="/elements/<?= $previtem ?>" class="square_btn"><?= "&nbsp;&nbsp;Move to<br>&nbsp;&nbsp;" . $previtem; ?></a>
                        <?php } ?>  
                     </div>
                </div>
                
                <div class="element-slug-above__image-img " >

                    <?php 
                    $image_url = $payload->element->main_info->image;
                    $cleaned_image_url = preg_replace('/-\d+x\d+/', '', $image_url);
                    ?>
                    <img src="<?= $cleaned_image_url; ?>" style="width:195px ;height:180px" class="lazyload"/>
                </div>

                <?php  
                if($payload->element->name === "Erbiums"){
                    $title_new = 'Erbium';
                }else{
                    $title_new = $payload->element->name;
                }
                ?>
                <div class="element-slug-above__image-info" style="color: <?= $payload->element->main_info->element_type->color; ?>;padding:10px">
                    <div class="element-slug-above__image-overlay element--style element--pressed">
                        <div class="element-slug-above__image-info--number"><?= $payload->element->main_info->atomic_number; ?></div>
                        <div class="element-slug-above__image-info--mass"><?= $payload->element->main_info->atomic_mass; ?></div>
                        <div class="element-slug-above__image-info--code" style="font-size: 60px" ><?= $payload->element->main_info->chemical_symbol; ?></div>
                        <div class="element-slug-above__image-info--name" style="width: 100%;font-size:20px;margin:0px;text-align: center;left: 43%" ><?=  $title_new; ?></div>
                    </div>
                </div>

                <div class="element-slug-above__image-info" style="margin-left: 170px; width:165px">
                     <div style="float:right;">
                        <?php if ($nextitem != "" ) { ?>  
                          <a href="/elements/<?= $nextitem ?>" class="square_btn"><?= "&nbsp;&nbsp;Move to<br>&nbsp;&nbsp;" . $nextitem; ?></a>
                          <img src="<?= get_template_directory_uri() . '/assets/images/next.png'; ?>" style="height: 35px;width: 25px; border:none;margin-top: -15px"/>  
                        <?php } ?>  
                      </div>
                </div>
            </div>
            <h1 class="element-slug-above__title" style="display:none"><?= $payload->element->name; ; ?></h1>
        </div>

        <div class="element-slug-above__bottom element--style element--emboss" >
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label">Weight</label>
                <div class="element-slug-above__col-text"><?= $payload->element->main_info->density ?></div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label"><b>Relative Atomic Mass:</b></label>
                <div class="element-slug-above__col-text"><?= $payload->element->fact_table->relative_atomic_mass; ?></div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label">Electron Configuration</label>
                <div class="element-slug-above__col-text"><?= $payload->element->main_info->electron_configuration ?></div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label">Key Isotopes</label>
                <div class="element-slug-above__col-text"><?= $payload->element->main_info->key_isotopes ?></div>
            </div>

            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label"><b>Group:</b></label>
                <div class="element-slug-above__col-text"><?= $payload->element->fact_table->group->name; ?></div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label"><b>Period:</b></label>
                <div class="element-slug-above__col-text"><?= $payload->element->fact_table->period->name; ?></div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label"><b>Block:</b></label>
                <div class="element-slug-above__col-text"><?= $payload->element->fact_table->block->name; ?></div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label"><b>Atomic Number:</b></label>
                <div class="element-slug-above__col-text"><?= $payload->element->fact_table->atomic_number; ?></div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label">Energy Levels</label>
                <div class="element-slug-above__col-text"><?= $payload->element->main_info->energy_levels ?></div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label">1st Ionisation Energy</label>
                <div class="element-slug-above__col-text"><?= $payload->element->main_info->first_ionization_energy ?></div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label"><b>State at 20°C:</b></label>
                <div class="element-slug-above__col-text"><?= $payload->element->fact_table->state_at_20_deg; ?></div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label"><b>Density (g/cm<sup>3</sup>):</b></label>
                <div class="element-slug-above__col-text"><?= $payload->element->fact_table->density; ?></div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label">Melting Point</label>
                <div class="element-slug-above__col-text"><?= $payload->element->main_info->melting_point ?></div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label">Boiling Point</label>
                <div class="element-slug-above__col-text"><?= $payload->element->main_info->boiling_point ?></div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label">Discovered By</label>
                <div class="element-slug-above__col-text"><?= $payload->element->main_info->discovered_by ?></div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label">Discovery Date</label>
                <div class="element-slug-above__col-text"><?= $payload->element->main_info->discovery_date ?></div>
            </div>


            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label"><b> </b></label>
                <div class="element-slug-above__col-text"> </div>
            </div>
            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label"><b>CAS Number:</b></label>
                <div class="element-slug-above__col-text"><?= $payload->element->fact_table->cas_number ?></div>
            </div>

            <div class="element-slug-above__col">
                <label class="element-slug-above__col-label"><b>ChemSpider ID:</b></label>
                <div class="element-slug-above__col-text"><?= $payload->element->fact_table->chem_spider_id; ?></div>
            </div>

        </div>
    </div>
</div>
<script>
  // Initialize lazysizes
  window.lazySizesConfig = window.lazySizesConfig || {};
  window.lazySizesConfig.init = false; // Prevent automatic initialization, we will manually initialize
</script>
<script src="https://cdn.jsdelivr.net/npm/lazysizes@5.3.2/plugins/init/ls.unveilhooks.min.js"></script>
<script>
  // Manually initialize lazysizes
  document.addEventListener('DOMContentLoaded', function () {
    lazySizes.init(); // Initialize lazysizes
  });
</script>
