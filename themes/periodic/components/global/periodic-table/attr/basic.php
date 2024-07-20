<?php $payload = (count($args) > 0) ? (object) $args : null; ?>

<?php if (isset($payload)) echo "data-chemical-symbol='{$payload->item->chemical_symbol}'"; ?>
<?php if (isset($payload)) echo "data-name='{$payload->item->name}'"; ?>
<?php if (isset($payload)) echo "data-slug='{$payload->item->slug}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-color='{$payload->item->main_info->taxonomies->element_type->color}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-atomic-number='{$payload->item->main_info->atomic_number}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-atomic-mass='{$payload->item->main_info->atomic_mass}'"; ?>
<?php if (isset($payload)) echo "data-classification='{$payload->item->filters->classification->slug}'"; ?>
<?php if (isset($payload)) echo "data-type='{$payload->item->filters->type->slug}'"; ?>
<?php if (isset($payload)) echo "data-group='{$payload->item->filters->group->name}'"; ?>
<?php if (isset($payload)) echo "data-period='{$payload->item->filters->period->name}'"; ?>
<?php if (isset($payload)) echo "data-block='{$payload->item->filters->block->name}'"; ?>
<?php if (isset($payload)) echo "data-form='{$payload->item->filters->form->name}'"; ?>
<?php if (isset($payload)) echo "data-mp='{$payload->item->filters->melting_point_k}'"; ?>
<?php if (isset($payload)) echo "data-bp='{$payload->item->filters->boiling_point_k}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-density='{$payload->item->main_info->density}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-energy-levels='{$payload->item->main_info->energy_levels}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-electron='{$payload->item->main_info->electron_configuration}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-ionisation='{$payload->item->main_info->{'1st_ionisation_energy'}}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-isotopes='{$payload->item->main_info->key_isotopes}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-melting='{$payload->item->main_info->melting_point}'"; ?>
<?php if (isset($payload) && $payload->item->main_info) echo "data-boiling='{$payload->item->main_info->boiling_point}'"; ?>
<?php
    if (isset($payload)) {
        echo "style='background-color:{$payload->item->main_info->taxonomies->element_type->color}'";
    } else {
        echo "style='background-color: #FFF'";
    }
?>
