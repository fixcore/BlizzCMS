<script src="<?= base_url(); ?>core/js/tippy.all.min.js"></script>

    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-medium" data-uk-grid>
            <div class="uk-width-1-1@l">
                <h3 class="uk-heading-divider uk-text-white"><i class="ra ra-anvil"></i> Playername</h3>
            </div>
            <div class="uk-width-1-2@l">
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-1-5@l">
                        <a id="InvHead" class="uk-button uk-button-link" data-tippy-arrow="true" data-tippy-animation="shift-away">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvHead($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvHeadTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvHead($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvHead', { html: '#InvHeadTemplate' })</script>
                        
                        <div class="fx-gap"></div>
                        <a id="InvNeck">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvNeck($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvNeckTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvNeck($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvNeck', { html: '#InvNeckTemplate' })</script>

                        <div class="fx-gap"></div>
                        <a id="InvSoulders">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvShoulders($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvShouldersTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvShoulders($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvSoulders', { html: '#InvShouldersTemplate' })</script>

                        <div class="fx-gap"></div>
                        <a id="InvBody">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvBody($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvBodyTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvBody($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvBody', { html: '#InvBodyTemplate' })</script>

                        <div class="fx-gap"></div>
                        <a id="InvChest">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvChest($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvChestTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvChest($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvChest', { html: '#InvChestTemplate' })</script>
                        
                        <div class="fx-gap"></div>
                        <a id="InvWrists">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvWrists($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvWristsTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvWrists($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvWrists', { html: '#InvWristsTemplate' })</script>

                        <div class="fx-gap"></div>
                        <a id="InvBack">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvBack($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvBackTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvBack($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvBack', { html: '#InvBackTemplate' })</script>

                        <div class="fx-gap"></div>
                        <a id="InvTabard">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvTabard($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvTabardTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvTabard($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvTabard', { html: '#InvTabardTemplate' })</script>

                        <div class="fx-gap"></div>
                    </div>
                    <div class="uk-width-3-5@l">
                        <div class="fx-gap-4"></div>
                        <div class="fx-gap-4"></div>
                        <div class="fx-gap-4"></div>
                        <div class="fx-gap-4"></div>
                        <div class="fx-gap-4"></div>
                        <div class="fx-gap-4"></div>
                        <div class="fx-gap-2"></div>
                        <span style="display:inline-block; width: 35px;"></span>
                        <a id="InvMainHand">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvMainHand($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvMainHandTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvMainHand($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvMainHand', { html: '#InvMainHandTemplate' })</script>

                        <a id="InvOffHand">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvOffHand($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvOffHandTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvOffHand($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvOffHand', { html: '#InvOffHandTemplate' })</script>

                        <a id="InvRanged">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvRanged($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvRangedTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvRanged($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvRanged', { html: '#InvRangedTemplate' })</script>

                    </div>
                    <div class="uk-width-1-5@l">
                        <a id="InvWaist">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvWaist($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvWaistTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvWaist($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvWaist', { html: '#InvWaistTemplate' })</script>

                        <div class="fx-gap"></div>
                        <a id="InvLegs">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvLegs($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvLegsTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvLegs($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvLegs', { html: '#InvLegsTemplate' })</script>

                        <div class="fx-gap"></div>
                        <a id="InvFeet">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvFeet($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvFeetTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvFeet($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvFeet', { html: '#InvFeetTemplate' })</script>

                        <div class="fx-gap"></div>
                        <a id="InvHands">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvHands($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvHandsTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvHands($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvHands', { html: '#InvHandsTemplate' })</script>

                        <div class="fx-gap"></div>
                        <a id="InvFingerOne">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvFingerOne($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvFingerOneTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvFingerOne($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvFingerOne', { html: '#InvFingerOneTemplate' })</script>

                        <div class="fx-gap"></div>
                        <a id="InvFingerTwo">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvFingerTwo($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvFingerTwoTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvFingerTwo($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvFingerTwo', { html: '#InvFingerTwoTemplate' })</script>

                        <div class="fx-gap"></div>
                        <a id="InvTrinketOne">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvTrinketOne($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvTrinketOneTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvTrinketOne($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvTrinketOne', { html: '#InvTrinketOneTemplate' })</script>
                        
                        <div class="fx-gap"></div>
                        <a id="InvTrinketTwo">
                            <img width="50" height="50" class="uk-border-rounded" src="<?= base_url('assets/icons/items/'); ?><?= $this->m_head->getImageItem($this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvTrinketTwo($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>.jpg" />
                        </a>
                        <div id="InvTrinketTwoTemplate" style="display: none">
                            <?= $this->m_head->getHtmlTooltip($this->config->item('itemsArmoryLang'), $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvTrinketTwo($idplayer, $this->m_data->getRealmConnectionData($idrealm)))); ?>
                        </div>
                        <script>tippy('#InvTrinketTwo', { html: '#InvTrinketTwoTemplate' })</script>
                        
                        <div class="fx-gap"></div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2@l">
                <h3 class="uk-heading-line uk-text-center uk-text-white"><span><?= $this->lang->line('playervsplayer'); ?></span></h3>
                <div class="uk-column-1-2">
                    <p>
                        <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg " width="35" class="nk-btn-rounded" alt="" style="margin-right: 10px;">
                        <span class="uk-text-white"><span>Total Muertes</span> 643</span>
                    </p>
                    <p>
                        <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg " width="35" class="nk-btn-rounded" alt="" style="margin-right: 10px;">
                        <span class="uk-text-white"><span>Total Hoy</span> 0</span>
                    </p>
                </div>
                <div class="uk-space-small"></div>
                <h3 class="uk-heading-line uk-text-center uk-text-white"><span>Profesiones</span></h3>
                <img src="https://www.wowlatinoamerica.com/assets/images/skills/sastreria.jpg" class="nk-btn-rounded" alt="" width="35" style="margin-right: 10px;">
                <span class="uk-text-white"><span>Sastrería </span> 426 / 450</span>
                <div class="uk-space-small"></div>
                <h3 class="uk-heading-line uk-text-center uk-text-white"><span>Equipos PvP</span></h3>
                <div class="uk-column-1-1">
                    <p>
                        <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg " width="35" class="nk-btn-rounded" alt="">
                        <span class="uk-text-white">Sin equipo de arena</span>
                    </p>
                    <p>
                        <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg " width="35" class="nk-btn-rounded" alt="">
                        <span class="uk-text-white">Sin equipo de arena</span>
                    </p>
                    <p>
                        <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg " width="35" class="nk-btn-rounded" alt="">
                        <span class="uk-text-white">Sin equipo de arena</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-2@l">
                <div uk-slider>
                    <div class="uk-position-relative uk-visible-toggle uk-light">
                        <ul class="uk-slider-items uk-child-width-1-1@s uk-grid">
                            <li>
                                <div class="uk-card uk-card-secondary">
                                    <div class="uk-card-body uk-text-center">
                                        <h4 class="uk-card-title">Mounts</h4>
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-secondary">
                                    <div class="uk-card-body uk-text-center">
                                        <h4 class="uk-card-title">Mounts</h4>
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2@l">
                <div uk-slider>
                    <div class="uk-position-relative uk-visible-toggle uk-light">
                        <ul class="uk-slider-items uk-child-width-1-1@s uk-grid">
                            <li>
                                <div class="uk-card uk-card-secondary">
                                    <div class="uk-card-body uk-text-center">
                                        <h4 class="uk-card-title">Pets</h4>
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-secondary">
                                    <div class="uk-card-body uk-text-center">
                                        <h4 class="uk-card-title">Pets</h4>
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                            <div class="uk-width-1-6@l">
                                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                </div>
            </div>
        </div>