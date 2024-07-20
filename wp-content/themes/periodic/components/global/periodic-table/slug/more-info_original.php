<?php $payload = (count($args) > 0) ? (object) $args : null; ?>

<div class="element-slug-info">
    <div class="element-slug-info__wrapper container">
        <div class="element-slug-info__top" style="width: 100%; text-align: center;">
            <span class="element-slug-info__title">More Information</span>
        </div>
        <div class="element-slug-info__top" style="width: 100%; text-align: right;">
            <span id="expand" style="text-align: right;">expand all +</span>
        </div>
        <div class="element-slug-info__bottom">
            <?php if ($payload->element->fact_table && 1 == 2): ?>
                <div id="fact-table" class="element-slug-info__collapse" style="border: 2px solid <?= $payload->element->main_info->element_type->color; ?>;">
                    <div class="element-slug-info__collapse-top" style="background-color: <?= $payload->element->main_info->element_type->color; ?>;">
                        <div class="element-slug-info__collapse-title">Fact Table</div>
                        <div class="element-slug-info__collapse-action pointer"></div>
                    </div>
                    <div class="element-slug-info__collapse-bottom">
                        <div class="element-slug-info__collapse-desc element-slug-info__collapse-desc--inline">
                            <div class="element-slug-info__collapse-col"><b>Group:</b> <span><?= $payload->element->fact_table->group->name; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Period:</b> <span><?= $payload->element->fact_table->period->name; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Block:</b> <span><?= $payload->element->fact_table->block->name; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Atomic Number:</b> <span><?= $payload->element->fact_table->atomic_number; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>ChemSpider ID:</b> <span><?= $payload->element->fact_table->chem_spider_id; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Density (g/cm<sup>3</sup>):</b> <span><?= $payload->element->fact_table->density; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Relative Atomic Mass:</b> <span><?= $payload->element->fact_table->relative_atomic_mass; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>State at 20°C:</b> <span><?= $payload->element->fact_table->state_at_20_deg; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>CAS Number:</b> <span><?= $payload->element->fact_table->cas_number; ?></span></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($payload->element->uses_and_properties->image_explanation): ?>
                <div id="uses" class="element-slug-info__collapse" style="border: 2px solid <?= $payload->element->main_info->element_type->color; ?>;">
                    <div class="element-slug-info__collapse-top" style="background-color: <?= $payload->element->main_info->element_type->color; ?>;">
                        <div class="element-slug-info__collapse-title"><h2 style="font-size: 22px;">Uses and Properties</h2></div>
                        <div class="element-slug-info__collapse-action pointer"></div>
                    </div>
                    <div class="element-slug-info__collapse-bottom">
                        <div class="element-slug-info__collapse-desc">
                            <div>
                                <b>Image Explanation</b>
                                <p></p>
                                <p><?= nl2br($payload->element->uses_and_properties->image_explanation); ?></p>
                                <p></p>
                            </div>
                            <div>
                                <b>Appearance</b>
                                <p></p>
                                <p><?= nl2br($payload->element->uses_and_properties->appearance); ?></p>
                                <p></p>
                            </div>
                            <div>
                                <b>Uses</b>
                                <p></p>
                                <p><?= nl2br($payload->element->uses_and_properties->uses); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($payload->element->history): ?>
                <div id="history" class="element-slug-info__collapse" style="border: 2px solid <?= $payload->element->main_info->element_type->color; ?>;">
                    <div class="element-slug-info__collapse-top" style="background-color: <?= $payload->element->main_info->element_type->color; ?>;">
                        <div class="element-slug-info__collapse-title"><h2 style="font-size: 22px;">History</h2></div>
                        <div class="element-slug-info__collapse-action pointer"></div>
                    </div>
                    <div class="element-slug-info__collapse-bottom">
                        <div class="element-slug-info__collapse-desc">
                          <div style="text-align: right;">
                              <a href="/history" style="color: <?= $payload->element->main_info->element_type->color; ?>;">Elements and Periodic Table History</a>
                          </div>
                            <div>
                                <p><?= nl2br($payload->element->history); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($payload->element->atomic_data->atomic_radius_non_bonded): ?>
                <div id="atomic-data" class="element-slug-info__collapse" style="border: 2px solid <?= $payload->element->main_info->element_type->color; ?>;">
                    <div class="element-slug-info__collapse-top" style="background-color: <?= $payload->element->main_info->element_type->color; ?>;">
                        <div class="element-slug-info__collapse-title"><h2 style="font-size: 22px;">Atomic Data</h2></div>
                        <div class="element-slug-info__collapse-action pointer"></div>
                    </div>
                    <div class="element-slug-info__collapse-bottom">
                        <div class="element-slug-info__collapse-desc element-slug-info__collapse-desc--inline">
                            <div class="element-slug-info__collapse-col"><b>Atomic Radiues, Non-bonded (A):</b> <span><?= $payload->element->atomic_data->atomic_radius_non_bonded; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Electron Affinity (kJ mol-1):</b> <span><?= $payload->element->atomic_data->electron_affinity; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Covalent Radiues (A):</b> <span><?= $payload->element->atomic_data->covalent_radius; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Electronegativity (Pauling Scale):</b> <span><?= $payload->element->atomic_data->electronegativity; ?></span></div>
                            <table>
                                <thead>
                                    <th>Ionisation Energies (kJ mol-1)</th>
                                    <th>1st</th>
                                    <th>2nd</th>
                                    <th>3rd</th>
                                    <th>4th</th>
                                    <th>5th</th>
                                    <th>6th</th>
                                    <th>7th</th>
                                    <th>8th</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-column="Ionisation Energies (kJ mol-1)"></td>
                                        <td data-column="1st:"><?= ($payload->element->atomic_data->first_ionisation_energy) ? $payload->element->atomic_data->first_ionisation_energy : '-'; ?></td>
                                        <td data-column="2nd:"><?= ($payload->element->atomic_data->second_ionisation_energy) ? $payload->element->atomic_data->second_ionisation_energy : '-'; ?></td>
                                        <td data-column="3rd:"><?= ($payload->element->atomic_data->third_ionisation_energy) ? $payload->element->atomic_data->third_ionisation_energy : '-'; ?></td>
                                        <td data-column="4th:"><?= ($payload->element->atomic_data->fourth_ionisation_energy) ? $payload->element->atomic_data->fourth_ionisation_energy : '-'; ?></td>
                                        <td data-column="5th:"><?= ($payload->element->atomic_data->fifth_ionisation_energy) ? $payload->element->atomic_data->fifth_ionisation_energy : '-'; ?></td>
                                        <td data-column="6th:"><?= ($payload->element->atomic_data->sixth_ionisation_energy) ? $payload->element->atomic_data->sixth_ionisation_energy : '-'; ?></td>
                                        <td data-column="7th:"><?= ($payload->element->atomic_data->seventh_ionisation_energy) ? $payload->element->atomic_data->seventh_ionisation_energy : '-'; ?></td>
                                        <td data-column="8th:"><?= ($payload->element->atomic_data->eighth_ionisation_energy) ? $payload->element->atomic_data->eighth_ionisation_energy : '-'; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($payload->element->oxidation_states_and_isotopes): ?>
                <div id="oxidation" class="element-slug-info__collapse" style="border: 2px solid <?= $payload->element->main_info->element_type->color; ?>;">
                    <div class="element-slug-info__collapse-top" style="background-color: <?= $payload->element->main_info->element_type->color; ?>;">
                        <div class="element-slug-info__collapse-title"><h2 style="font-size: 22px;">Oxidation States and Isotopes</h2></div>
                        <div class="element-slug-info__collapse-action pointer"></div>
                    </div>
                    <div class="element-slug-info__collapse-bottom">
                        <div class="element-slug-info__collapse-desc">
                            <?= $payload->element->oxidation_states_and_isotopes; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($payload->element->supply_risk->relative_supply_risk): ?>
                <div id="supply" class="element-slug-info__collapse" style="border: 2px solid <?= $payload->element->main_info->element_type->color; ?>;">
                    <div class="element-slug-info__collapse-top" style="background-color: <?= $payload->element->main_info->element_type->color; ?>;">
                        <div class="element-slug-info__collapse-title"><h2 style="font-size: 22px;">Supply Risk</h2></div>
                        <div class="element-slug-info__collapse-action pointer"></div>
                    </div>
                    <div class="element-slug-info__collapse-bottom">
                        <div class="element-slug-info__collapse-desc element-slug-info__collapse-desc--inline">
                            <div class="element-slug-info__collapse-col"><b>Relative Supply Risk:</b> <span><?= $payload->element->supply_risk->relative_supply_risk; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Crustal Abundance (ppm):</b> <span><?= $payload->element->supply_risk->crustal_abundance; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Recycle Rate (%):</b> <span><?= $payload->element->supply_risk->recycling_rate; ?></span></div>

                            <div class="element-slug-info__collapse-col"><b> </b> <span> </span></div>

                            <div class="element-slug-info__collapse-col"><b>Production Conc.(%) :</b> <span><?= $payload->element->supply_risk->production_concentration; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Top 3 Producers:</b><br><span><?= nl2br($payload->element->supply_risk->top_3_producers); ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Top 3 Reserve Holders:</b><br> <span><?= nl2br($payload->element->supply_risk->top_3_reserve_holders); ?></span></div>

                            <div class="element-slug-info__collapse-col"><b> </b> <span> </span></div>

                            <div class="element-slug-info__collapse-col"><b>Substitutability:</b> <span><?= $payload->element->supply_risk->substitutability; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Political Stability of Top Producer:</b> <span><?= $payload->element->supply_risk->political_stability_of_top_producer; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Political Stability of Top Reserve Holder:</b> <span><?= $payload->element->supply_risk->political_stability_of_top_reserve_holder; ?></span></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($payload->element->pressure_and_temperature_data->specific_heat_capacity): ?>
                <div id="pressure" class="element-slug-info__collapse" style="border: 2px solid <?= $payload->element->main_info->element_type->color; ?>;">
                    <div class="element-slug-info__collapse-top" style="background-color: <?= $payload->element->main_info->element_type->color; ?>;">
                        <div class="element-slug-info__collapse-title"><h2 style="font-size: 22px;">Pressure and Temperature Data</h2></div>
                        <div class="element-slug-info__collapse-action pointer"></div>
                    </div>
                    <div class="element-slug-info__collapse-bottom">
                        <div class="element-slug-info__collapse-desc element-slug-info__collapse-desc--inline">
                            <div class="element-slug-info__collapse-col"><b>Specific Heat Capacity:</b> <span><?= $payload->element->pressure_and_temperature_data->specific_heat_capacity; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Shear Modulus:</b> <span><?= $payload->element->pressure_and_temperature_data->shear_modulus; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Young Modulus:</b> <span><?= $payload->element->pressure_and_temperature_data->youngs_modulus; ?></span></div>
                            <div class="element-slug-info__collapse-col"><b>Bulk Modulus:</b> <span><?= $payload->element->pressure_and_temperature_data->bulk_modulus; ?></span></div>
                            <table>
                                <thead style="font-size: 15px;">
                                    <th>Pressure 400k</th>
                                    <th>Pressure 600k</th>
                                    <th>Pressure 800k</th>
                                    <th>Pressure 1000k</th>
                                    <th>Pressure 1200k</th>
                                    <th>Pressure 1400k</th>
                                    <th>Pressure 1600k</th>
                                    <th>Pressure 1800k</th>
                                    <th>Pressure 2000k</th>
                                    <th>Pressure 2200k</th>
                                    <th>Pressure 2400k</th>
                                </thead>
                                <tbody style="font-size: 12px;font-weight: bold;">
                                    <tr>
                                        <td data-column="Pressure 400k:"><?= ($payload->element->pressure_and_temperature_data->pressure_400k) ? $payload->element->pressure_and_temperature_data->pressure_400k : '-'; ?></td>
                                        <td data-column="Pressure 600k:"><?= ($payload->element->pressure_and_temperature_data->pressure_600k) ? $payload->element->pressure_and_temperature_data->pressure_600k : '-'; ?></td>
                                        <td data-column="Pressure 800k:"><?= ($payload->element->pressure_and_temperature_data->pressure_800k) ? $payload->element->pressure_and_temperature_data->pressure_800k : '-'; ?></td>
                                        <td data-column="Pressure 1000k:"><?= ($payload->element->pressure_and_temperature_data->pressure_1000_k) ? $payload->element->pressure_and_temperature_data->pressure_1000_k : '-'; ?></td>
                                        <td data-column="Pressure 1200k:"><?= ($payload->element->pressure_and_temperature_data->pressure_1200_k) ? $payload->element->pressure_and_temperature_data->pressure_1200_k : '-'; ?></td>
                                        <td data-column="Pressure 1400k:"><?= ($payload->element->pressure_and_temperature_data->pressure_1400_k) ? $payload->element->pressure_and_temperature_data->pressure_1400_k : '-'; ?></td>
                                        <td data-column="Pressure 1600k:"><?= ($payload->element->pressure_and_temperature_data->pressure_1600_k) ? $payload->element->pressure_and_temperature_data->pressure_1600_k : '-'; ?></td>
                                        <td data-column="Pressure 1800k:"><?= ($payload->element->pressure_and_temperature_data->pressure_1800_k) ? $payload->element->pressure_and_temperature_data->pressure_1800_k : '-'; ?></td>
                                        <td data-column="Pressure 2000k:"><?= ($payload->element->pressure_and_temperature_data->pressure_2000_k) ? $payload->element->pressure_and_temperature_data->pressure_2000_k : '-'; ?></td>
                                        <td data-column="Pressure 2200k:"><?= ($payload->element->pressure_and_temperature_data->pressure_2200_k) ? $payload->element->pressure_and_temperature_data->pressure_2200_k : '-'; ?></td>
                                        <td data-column="Pressure 2400k:"><?= ($payload->element->pressure_and_temperature_data->pressure_2400_k) ? $payload->element->pressure_and_temperature_data->pressure_2400_k : '-'; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($payload->element->podcast): ?>
                <?php $podcasttxt = $payload->element->name; $podfile = $payload->element->main_info->audio ;?>
                <div id="podcast" class="element-slug-info__collapse" style="border: 2px solid <?= $payload->element->main_info->element_type->color; ?>;">
                    <div class="element-slug-info__collapse-top" style="background-color: <?= $payload->element->main_info->element_type->color; ?>;">
                        <div class="element-slug-info__collapse-title"><h2 style="font-size: 22px;">Podcast</h2></div>
                        <div class="element-slug-info__collapse-action pointer"></div>
                    </div>
                    <div class="element-slug-info__collapse-bottom">
                        <div class="element-slug-info__collapse-desc">
                           <div style="color: black;float:left;height:50px;padding-top: 20px;width:100%;margin-bottom: 100px;">
                              <a style="text-decoration:none" href="<?= "/podcasts/" . "#playaudio-" . $podcasttxt ?>">
                                <button class="mybutton">
                                  <strong>&nbsp;&nbsp;Listen to <?= $podcasttxt ?> Podcast&nbsp;&nbsp;
                                  </strong>
                                </button>   
                                  <br><br>
                              </a>     
                           </div>
                           
                            <div>
                                <div style="float: none;width:100%">
                                    <?= nl2br($payload->element->podcast) ; ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($payload->element->video): ?>
                <?php $podcasttxt = $payload->element->name; ?>
                <div id="video" class="element-slug-info__collapse" style="border: 2px solid <?= $payload->element->main_info->element_type->color; ?>;">
                    <div class="element-slug-info__collapse-top" style="background-color: <?= $payload->element->main_info->element_type->color; ?>;">
                        <div class="element-slug-info__collapse-title"><h2 style="font-size: 22px;">Videos</h2></div>
                        <div class="element-slug-info__collapse-action pointer"></div>
                    </div>
                    <div class="element-slug-info__collapse-bottom">
                        <div class="element-slug-info__collapse-desc" style="margin-left: 27%;">
                          <div style="text-align: right;margin-bottom: 15px;display:none">
                              <a href="/videos" style="color: <?= $payload->element->main_info->element_type->color; ?>;">Periodic Table of Videos</a>
                          </div>

                           <div style="color: black;float:left;height:50px;padding-top: 20px;">
                              <a style="text-decoration:none" href="<?= "/videos/" . "#playvideo-" . $podcasttxt ?>">
                                <button class="mybutton">
                                  <strong>&nbsp;&nbsp;play  <?= $podcasttxt ?>  Video&nbsp;&nbsp;
                                  </strong>
                                </button>   
                                  <br><br>
                              </a>     
                           </div>
                          <div style="float:none;height:50px;"></div>
                            <div style="display:none">
                                <iframe src="<?= $payload->element->video; ?>" width="100%" height="750px" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                            </div>
                          </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($payload->element->references): ?>
                <div id="references" class="element-slug-info__collapse" style="border: 2px solid <?= $payload->element->main_info->element_type->color; ?>;">
                    <div class="element-slug-info__collapse-top" style="background-color: <?= $payload->element->main_info->element_type->color; ?>;">
                        <div class="element-slug-info__collapse-title"><h2 style="font-size: 22px;">References</h2></div>
                        <div class="element-slug-info__collapse-action pointer"></div>
                    </div>
                    <div class="element-slug-info__collapse-bottom">
                        <div class="element-slug-info__collapse-desc">
                            <div>
                                <p><?= nl2br($payload->element->references); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div id="explore_other" class="element-slug-info__collapse" style="border: 2px solid <?= $payload->element->main_info->element_type->color; ?>;">
                <div class="element-slug-info__collapse-top" style="background-color: <?= $payload->element->main_info->element_type->color; ?>;">
                    <div class="element-slug-info__collapse-title"><h2 style="font-size: 22px;">Explore other Chemical Elements</h2></div>
                    <div class="element-slug-info__collapse-action pointer"></div>
                </div>
                <div class="element-slug-info__collapse-bottom">
                  <div class="element-slug-info__collapse-desc element-slug-info__collapse-desc--inline">
                      <?php foreach ($payload->others as $key => $other): ?>
                          <a href="/elements<?= $other->permalink; ?>" class="element-slug-info__collapse-col element-slug-info__collapse-col--link" style="color: <?= $payload->element->main_info->element_type->color; ?>;"><h3><?= $other->title; ?></h3></a>
                      <?php endforeach; ?>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
