<?php
    useElementController();
    $element_controller = new ElementController;

    $url = explode('?', $_SERVER['REQUEST_URI'])[0];
    $page = null;
    $component = null;
    $filter = true;

    switch ($url) {
        case '/':
            $component = 'basic';
            $page = 'home';
            break;
        case '/history/':
            $component = 'history';
            $page = 'history';
            break;
        case '/podcasts/':
            $filter = false;
            $component = 'podcasts';
            $page = 'podcasts';
            break;
        case '/videos/':
            $filter = false;
            $component = 'videos';
            $page = 'videos';
            break;
    }
        $payload = $element_controller->getElements($page);
    
?>

<div class="element-box container <?= $component; ?>">
    
    
    <?php if ($filter): ?>
        <div class="element-box__filter <?= $component; ?>">
            <?php
                get_template_part("components/global/periodic-table/filter/{$component}", null, array(
                    'filters'  => $payload->filters
                ));
            ?>
        </div>
    <?php endif; ?>


    <div class="element-box__periodic">
        <div class="element-box__info none">
            <div class="element-box__info-left">
                <div class="info__number"></div>
                <div class="info__code"></div>
                <div class="info__name"></div>
                <div class="info__mass"></div>
            </div>
            <?php
                get_template_part("components/global/periodic-table/info/{$component}", null);
            ?>
        </div>
        <?php if ($url == '/'): ?>
            <div class="element-box__formula none">
                <div class="element-box__formula-left">
                    <div id="kelvin" class="element-box__formula-count">0</div>
                    <div class="element-box__formula-label">Kelvin</div>
                </div>
                <div class="element-box__formula-right">
                    <div id="celsius" class="element-box__formula-count">−273°</div>
                    <div class="element-box__formula-label">Celsius</div>
                </div>
            </div>
        <?php endif; ?>
        <?php foreach ($payload->rows as $key => $row): ?>
            <div class="element-box__row <?= (count($row->elements) <= 0) ? 'element-box__row--small' : '' ?>">
                <?php

                    for ($i = 1; $i <= 18; $i++) {
                        $matched = false;
                        $item = null;
                        foreach ($row->elements as $key => $element) {
                            if ($element->column == $i) {
                                $matched = true;
                                $item = $element;
                            }
                        }
                        if ($matched) {
                            get_template_part('components/global/periodic-table/element', null, array(
                                'item'  => $item
                            ));
                        } else {
                            get_template_part('components/global/periodic-table/element', null);
                        }
                    }
                    
                ?>
            </div>
        <?php endforeach; ?>
    </div>


    <div class="element-slug-info__wrapper container" style="width:100%; padding-top: 50px;padding-right: 0px;padding-left: 0px;margin:0">
            <?php 
                $url = explode('?', $_SERVER['REQUEST_URI'])[0];
                if ($url == home_url() )
                {
                ?>
                    <div class="element-slug-info__top" style="margin-bottom: 20px;">
                        <h1 class="main__header-title" style="text-align: center;"><?php the_title(); ?></h1>
                    </div>
                <?php
                }
                ?>
            <?php
            while ( have_posts() ) : the_post();
                echo "<p>" . wpautop(the_content()) . "</p>"; 
            endwhile; 
            ?>
    </div><!-- #content -->         


</div>
