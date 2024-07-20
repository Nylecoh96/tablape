<?php $payload = (count($args) > 0) ? (object) $args : null; ?>

<?php if (isset($payload)) echo "data-chemical-symbol='{$payload->item->chemical_symbol}'"; ?>
<?php if (isset($payload)) echo "data-name='{$payload->item->name}'"; ?>
<?php if (isset($payload)) echo "data-slug='{$payload->item->slug}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-color='{$payload->item->main_info->taxonomies->element_type->color}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-atomic-number='{$payload->item->main_info->atomic_number}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-atomic-mass='{$payload->item->main_info->atomic_mass}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-discovered-by='{$payload->item->main_info->discovered_by}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-year='{$payload->item->main_info->discovery_date}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-year-label='{$payload->item->main_info->discovery_date_label}'"; ?>
<?php
    if (isset($payload)) {
        echo "style='background-color:{$payload->item->main_info->taxonomies->element_type->color}'";
    } else {
        echo "style='background-color: transparent'";
    }
?>
<?php
    if (isset($payload) && $payload->item->main_info) {
        echo 'data-origin-name="'. htmlspecialchars($payload->item->main_info->origin_of_the_name) .'"';
    }
?>
