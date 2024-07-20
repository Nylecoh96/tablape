<?php
    $payload = (count($args) > 0) ? (object) $args : null;
    $ranges = getRanges('temperature');

    $taxonomy = 'element-form'; // Replace 'your_taxonomy_slug' with the actual slug of your taxonomy

    $terms = get_terms($taxonomy);

?>

<div class="element-box__filter--inline element-box__filter--mb">
    <div class="element-box__filter-column">
        <div class="element-box__filter--inline element-box__filter--ened">
            <div class="element-box__filter-column element-box__filter-column--pb">
                <label class="element-box__filter-label">Temperature</label>
                <div class="elemet-box__filter-input">
                    <div class="filter-input__action pointer filter-input__action--minus">
                        <svg class="none" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </div>
                    <input type="range" class="filter-input__range" id="temperature" name="temperature" min="<?= $ranges[0]->minimum_value ?>" value="<?= $ranges[0]->minimum_value ?>" max="<?= $ranges[0]->maximum_value ?>">
                    <div class="filter-input__action pointer filter-input__action--plus">
                        <svg class="none" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </div>
                </div>
            </div>
            <div class="element-box__filter-column element-box__filter-column--ml">
                <div class="elemet-box__filter-boxes">

                    <?php 

                    if (!empty($terms) && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                            $term_id = $term->term_id;       // Term ID
                            $term_name = $term->name;       // Term Name
                            $term_slug = $term->slug;       // Term Slug
                            $term_color = get_term_meta($term_id,'hex_code', true);
                            ?>
                            <div class="elemet-box__filter-legend">
                                <div class="elemet-box__filter-box none" style="background-color: <?php echo $term_color; ?>"></div>
                                <span><?php echo $term_name; ?></span>
                            </div>
                            <?php
                        }
                    } 
                    ?>
                    <div class="elemet-box__filter-legend">
                        <div class="elemet-box__filter-box none" style="background-color: #e6e6e6;"  ></div>
                        <span>Unknown</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="element-box__filter-column classification">
        <label class="element-box__filter-label desktop">Classifications</label>
        <div class="elemet-box__filter-auto desktop">

            <?php foreach ($payload->filters->element_classifications as $key => $classification): ?>
                <div
                    class="elemet-box__filter-auto-box filter-auto-box--mr filter filter__classification pointer"
                    data-value="<?= $classification->slug; ?>">
                    <span class="none"><?= $classification->name; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
		
    </div>
	
</div>

<div class="element-box__filter--inline element-box__filter--mb">

     <div class="elemet-box__filter-auto  mobile custom-select classification">
       <p><label class="element-box__filter-label">Classifications</label><p>
        <select class="form-select" aria-label="Default select example">
          <option selected>Filter by Classification</option>
           <?php foreach ($payload->filters->element_classifications as $key => $classification): ?>
              <option value="<?= $classification->slug; ?>" style="background-color:#171940;color:white;"><?= $classification->name; ?></option>
            <?php endforeach; ?>
        </select>
     </div>

      
      <div class="elemet-box__filter-auto mobile custom-select types">
       <p> <label class="element-box__filter-label">Types</label></p>
        <select class="form-select" aria-label="Default select example">
          <option selected>Filter by Types</option>
          <?php foreach ($payload->filters->element_types as $key => $type): ?>
              <option value="<?= $type->slug; ?>" data-color="<?= $type->color; ?>" style="background-color:<?= $type->color; ?>"><?= $type->name; ?></option>
            <?php endforeach; ?>
        </select>
     </div>


</div>


<div class="element-box__filter-row types">
    <label class="element-box__filter-label desktop">Types</label>
    <div class="elemet-box__filter-auto desktop">
        
        <?php foreach ($payload->filters->element_types as $key => $type): ?>
            <div
                class="elemet-box__filter-auto-box filter filter__type pointer"
                data-value="<?= $type->slug; ?>"
                data-color="<?= $type->color; ?>"
                style="background-color:<?= $type->color; ?>;color:white;">
                <span class="none"><?= $type->name; ?></span>
            </div>
        <?php endforeach; ?>
    </div>
</div>

 <div class="element-box__filter-row">
        <label class="element-box__filter-label">Blocks</label>
        <div class="elemet-box__filter-boxes">
            <?php foreach ($payload->filters->element_blocks as $key => $block): ?>
                <div
                    class="elemet-box__filter-box filter filter__block pointer"
                    data-value="<?= $block->name; ?>">
                    <span class="none"><?= $block->name; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="element-box__filter-column element-box__filter-column--end">
            <div class="element-box__filter-row">
                <div id="clear" class="button button--primary pointer"><span>Clear Filters</span></div>
            </div>
        </div>
    </div>  
<div class="spacer-line"></div>

<div class="element-box__filter--inline group-filter">
    <div class="element-box__filter-column">
        <div class="elemet-box__filter-boxes">
            <label class="element-box__filter-label"><small>Groups</small><img src="https://tablape.com/wp-content/uploads/2024/02/arrow-new.png" class="chart-right-arrow-bottom show"></label>
            <?php foreach ($payload->filters->element_groups as $key => $group): ?>
                <div
                    class="elemet-box__filter-box filter filter__group pointer"
                    data-value="<?= $group->name; ?>"
                >
                    <span class="none"><?= $group->name; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
   
</div>
<label class="element-box__filter-label periods-label"><small>Periods</small></label>


<div class="element-box__filter-column period-click" hidden>
        <label class="element-box__filter-label">Periods</label>
        <div class="elemet-box__filter-boxes">
            <?php foreach ($payload->filters->element_periods as $key => $period): ?>
                <div
                    class="elemet-box__filter-box filter filter__period pointer"
                    data-value="<?= $period->name; ?>"
                >
                    <span class="none"><?= $period->name; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


   