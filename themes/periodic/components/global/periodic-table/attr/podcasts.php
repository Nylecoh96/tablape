<?php $payload = (count($args) > 0) ? (object) $args : null; ?>

<?php if (isset($payload) && isset($payload->media)): ?>
    <?php if (strlen($payload->item->main_info->audio) > 0): ?>
        <div
            class="element__info-play"
            data-color="<?= $payload->item->main_info->taxonomies->element_type->color; ?>"
            data-audio="<?= $payload->item->main_info->audio; ?>"
            data-name="<?= $payload->item->name; ?>"
            data-slug="<?= $payload->item->slug; ?>"
            data-chemical-symbol="<?= $payload->item->chemical_symbol; ?>"
            data-atomic-number="<?= $payload->item->main_info->atomic_number; ?>"
            data-atomic-mass="<?= $payload->item->main_info->atomic_mass; ?>"
        >
            <svg class="audio-icon audio-icon__play none" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g class="none"/><g><path fill="#fff" d="M3.9,18.9V5.1c0-1.6,1.7-2.6,3-1.8l12,6.9c1.4,0.8,1.4,2.9,0,3.7l-12,6.9C5.6,21.5,3.9,20.5,3.9,18.9z"/></g></svg>
            <svg class="audio-icon audio-icon__pause none" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path fill="#fff" d="M14,8H9C8.4,8,8,8.4,8,9v14c0,0.6,0.4,1,1,1h5c0.6,0,1-0.4,1-1V9C15,8.4,14.6,8,14,8z"/><path fill="#fff" d="M23,8h-5c-0.6,0-1,0.4-1,1v14c0,0.6,0.4,1,1,1h5c0.6,0,1-0.4,1-1V9C24,8.4,23.6,8,23,8z"/></g></svg>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php
    if (isset($payload) && !isset($payload->media)) {
        if (isset($payload) && $payload->item) {
            echo "style='background-color:{$payload->item->main_info->taxonomies->element_type->color}'";
        } else {
            echo "style='background-color: #FFF'";
        }
    }
?>
