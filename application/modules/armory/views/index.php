    <div class="container">
        <div class="space-adaptive-medium"></div>
        <div class="space-adaptive-medium"></div>
        <div class="cold-md-12">
            <div class="cold-md-1"></div>
            <div class="cold-md-10 uk-text-break">
                <article data-id='' data-title="" class="ArticleDetail">
                    <div class="ArticleDetail-heading">
                        <div class="ArticleDetail-headingBlock">
                            <div class="Heading Heading--articleSubheading ArticleDetail-community flush-top"></div>
                            <!-- image -->
                                <div class="uk-child-width-1-1@s uk-light" uk-grid>
                                    <div class="uk-background-fixed uk-background-blend-multiply uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(https://www.wowlatinoamerica.com/uploads/01-2018/ca9721f78a09ca26e6c74720777f3e5f46339615.png);">
                                        <!-- left -->
                                            <div class="uk-position-small uk-position-center-left uk-overlay uk-position-absolute">
                                                <div class="uk-column-1-3">
                                                    <img class="uk-border-circle" src="<?= base_url('assets/images/races/'.$this->m_general->getRaceIcon($this->m_characters->getCharRace($idplayer, $this->m_data->getRealmConnectionData($idrealm), $idplayer)));?>" width="100" height="100" alt="Border circle">

                                                    <span class="uk-text-middle">
                                                        <p class="uk-text-capitalize uk-text-bold"><?= $nameplayer ?></p>
                                                        <p><?= $this->m_general->getRaceName($this->m_characters->getCharRace($idplayer, $this->m_data->getRealmConnectionData($idrealm), $idplayer)); ?></p>
                                                        <p><?= $this->m_general->getNameClass($this->m_characters->getCharClass($idplayer, $this->m_data->getRealmConnectionData($idrealm), $idplayer)); ?></p>
                                                        <p><?= $this->lang->line('column_level'); ?> <?= $this->m_characters->getCharLevel($idplayer, $this->m_data->getRealmConnectionData($idrealm), $idplayer); ?></p>
                                                    </span>
                                                </div>
                                            </div>
                                        <!-- left -->
                                    </div>
                                </div>
                            <!-- image -->
                            <div class="space-medium"></div>
                        </div>
                    </div>
                </article>
                <h1 class="uk-text-white"><?= $this->m_general->getRealmName($idrealm); ?></h1>
                <hr class="uk-divider-icon">
                <!-- content -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                
                                <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvHead($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                    <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_helmet_169.jpg" />
                                </a>                  
                                    <div class="fx-gap"></div>
                                                                    
                                <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvNeck($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                    <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_jewelcrafting_crimsonspinel_02.jpg" />
                                </a> 
                                    <div class="fx-gap"></div>
                                                                    
                                <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvShoulders($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                    <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_misc_questionmark.jpg" />
                                </a> 
                                    <div class="fx-gap"></div>
                                                                    
                                <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvBody($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                    <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_misc_ribbon_01.jpg" />
                                </a> 
                                    <div class="fx-gap"></div>

                                <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvChest($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                    <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_misc_ribbon_01.jpg" />
                                </a> 
                                    <div class="fx-gap"></div>

                                <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvWrists($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                    <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_misc_ribbon_01.jpg" />
                                </a> 
                                    <div class="fx-gap"></div>

                                <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvBack($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                    <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_misc_ribbon_01.jpg" />
                                </a> 
                                    <div class="fx-gap"></div>

                                <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvTabard($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                    <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_misc_ribbon_01.jpg" />
                                </a> 
                                    <div class="fx-gap"></div>
                            </div>
                            
                            <div class="col-md-8 text-center">
                                <div class="fx-gap-4"></div>
                                <div class="fx-gap-4"></div>
                                <div class="fx-gap-4"></div>
                                <div class="fx-gap-4"><center style="color: white;">Coming soon</center></div>
                                <div class="fx-gap-4"></div>
                                <div class="fx-gap-3"></div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a href="http://db.wowlatinoamerica.com/?item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvMainHand($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>" target="_blank" rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvMainHand($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                            <img src="https://www.wowlatinoamerica.com/assets/icons/medium/inv_shield_72.jpg" style="margin: 10px">
                                        </a>

                                        <a href="http://db.wowlatinoamerica.com/?item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvOffHand($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>" target="_blank" rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvOffHand($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                            <img src="https://www.wowlatinoamerica.com/assets/icons/medium/inv_shield_72.jpg" style="margin: 10px">
                                        </a>

                                        <a href="http://db.wowlatinoamerica.com/?item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvRanged($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>" target="_blank" rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvRanged($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                            <img src="https://www.wowlatinoamerica.com/assets/icons/medium/inv_shield_72.jpg" style="margin: 10px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                    <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvWaist($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                        <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_misc_ribbon_01.jpg" />
                                    </a> 
                                        <div class="fx-gap"></div>

                                    <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvLegs($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                        <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_misc_ribbon_01.jpg" />
                                    </a> 
                                        <div class="fx-gap"></div>

                                    <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvFeet($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                        <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_misc_ribbon_01.jpg" />
                                    </a> 
                                        <div class="fx-gap"></div>

                                    <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvHands($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                        <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_misc_ribbon_01.jpg" />
                                    </a> 
                                        <div class="fx-gap"></div>

                                    <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvFingerOne($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                        <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_misc_ribbon_01.jpg" />
                                    </a> 
                                        <div class="fx-gap"></div>

                                    <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvFingerTwo($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                        <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_misc_ribbon_01.jpg" />
                                    </a> 
                                        <div class="fx-gap"></div>

                                    <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvTrinketOne($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                        <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_misc_ribbon_01.jpg" />
                                    </a> 
                                        <div class="fx-gap"></div>

                                    <a rel="item=<?= $this->m_characters->getItemInstace($this->m_data->getRealmConnectionData($idrealm), $this->m_characters->getCharInvTrinketTwo($idplayer, $this->m_data->getRealmConnectionData($idrealm))); ?>">
                                        <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/inv_misc_ribbon_01.jpg" />
                                    </a> 
                                        <div class="fx-gap"></div>
                            </div>
                        </div>

                        
                    </div>

                    <div class="col-md-2"></div>

                    <div class="col-md-5 offset-1">
                        <h3 class="nk-decorated-h-2 uk-text-white"><?= $this->lang->line('playervsplayer'); ?></h3>
                        <div class="row">
                            <div class="col-md-6" style="margin-top: 10px">
                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg " width="35" class="nk-btn-rounded" alt="" style="margin-right: 10px;">
                                <span><span class="uk-text-white">Total Muertes </span> 643</span>
                            </div>
                            <div class="col-md-6" style="margin-top: 10px">
                                <img src=" https://www.wowlatinoamerica.com/assets/images/icons/faction-0-banner.jpg " width="35" class="nk-btn-rounded" alt="" style="margin-right: 10px;">
                                <span><span class="uk-text-white">Total Hoy </span> 0</span>
                            </div>
                        </div>

                        <div class="fx-gap-2"></div>
                        <h3 class="nk-decorated-h-2"><span>Profesiones</span></h3>
                        <div class="row">
                                                                                                        <div class="col-md-6" style="margin-top: 10px">
                                <img src="https://www.wowlatinoamerica.com/assets/images/skills/sastreria.jpg" class="nk-btn-rounded" alt="" width="35" style="margin-right: 10px;">
                                <span><span class="uk-text-white">Sastrería </span> 426 / 450</span>
                            </div>
                                                                        </div>

                        <div class="fx-gap-2"></div>
                        <h3 class="nk-decorated-h-2"><span>Equipos PvP</span></h3>
                        <div class="row">
                                                    <div class="col-md-12">
                                Sin equipo de arena
                            </div>
                                                </div>


                    </div>
                </div>
                <!-- content -->
                <div class="space-adaptive-medium"></div>
            </div>
            <div class="cold-md-1"></div>
        </div>
    </div>
</div>