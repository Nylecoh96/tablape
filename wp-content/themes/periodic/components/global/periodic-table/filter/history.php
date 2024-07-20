<?php
    $payload = (count($args) > 0) ? (object) $args : null;

    $ranges = getRanges('history');
?>

<div class="element-box__filter--inline element-box__filter--j-centered element-box__filter--mb">
    <div class="element-box__filter-column filter--center">
        <label class="element-box__filter-label filter-label--bold">AD<span class="filter__year">0</span></label>
        <div class="elemet-box__filter-input .elemet-box__filter-input--center">
            <div class="filter-input__action pointer filter-input__action--minus">
                <svg class="none" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            </div>
            <input type="range" class="filter-input__range filter-input__range--history" id="year" name="year" min="<?= $ranges[0]->minimum_value ?>" value="<?= $ranges[0]->minimum_value ?>" max="<?= $ranges[0]->maximum_value ?>">
            <div class="filter-input__action pointer filter-input__action--plus">
                <svg class="none" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            </div>
        </div>
    </div>
    <div class="element-box__filter-column element-box__filter-column--end">
        <div class="element-box__filter-row filter-row--nmb filter-row--history">
            <div id="clear" class="button button--primary pointer"><span>Clear Filters</span></div>
        </div>
    </div>
</div>
