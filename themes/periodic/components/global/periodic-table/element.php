<?php
    $payload = (count($args) > 0) ? (object) $args : null;
    $url = explode('?', $_SERVER['REQUEST_URI'])[0];
    $slug = true;
    $attr = null;
    $type = '';

    switch ($url) {
        case '/':
            $attr = 'components/global/periodic-table/attr/basic';
            break;
        case '/history/':
            $attr = 'components/global/periodic-table/attr/history';
            $type = '#history';
            break;
        case '/podcasts/':
            $slug = false;
            $attr = 'components/global/periodic-table/attr/podcasts';
            break;
        case '/videos/':
            $slug = false;
            $attr = 'components/global/periodic-table/attr/videos';
            break;
    }
?>

<a
    href="<?= ($payload && $slug) ? home_url("/elements/{$payload->item->slug}{$type}") : 'javascript:void(0)'; ?>"
    class="element <?= (!$payload) ? 'element--blank' : '' ?> <?= (isset($payload) && $payload->item->filters->classification->slug == 'both') ? 'element--dashed' : '' ?>"
    <?php
        if (isset($payload)) {
            get_template_part($attr, null, array(
                'item'  => $payload->item
            ));
        }
    ?>
>
    <div class="element__info <?= (!isset($payload->item->main_info->media)) ? '' : 'none'; ?>">
        <?php if (isset($payload)): ?>
            <div class="element__info-top none">
                <div class="element__info-number"><?= ($payload) ? $payload->item->main_info->atomic_number : ''; ?></div>
            </div>
            <div class="element__info-symbol"><?= ($payload) ? $payload->item->chemical_symbol : ''; ?></div>
        <?php endif; ?>
    </div>
    <?php
        if (isset($payload->item->main_info->media)) {
            get_template_part($attr, null, array(
                'item'  => $payload->item,
                'media' => true
            ));
        }
    ?>
</a>
