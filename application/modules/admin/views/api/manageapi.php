<?php if(isset($_POST['button_createApi'])) {
    $id = $this->admin_model->getUltimateApiCharID();

    if (isset($_POST['char_type1']) && $_POST['char_type1'] == '1')
        $this->admin_model->insertApiCharType($id, '1');

    if (isset($_POST['char_type2']) && $_POST['char_type2'] == '1')
        $this->admin_model->insertApiCharType($id, '2');

    if (isset($_POST['char_type3']) && $_POST['char_type3'] == '1')
        $this->admin_model->insertApiCharType($id, '3');

    if (isset($_POST['char_type4']) && $_POST['char_type4'] == '1')
        $this->admin_model->insertApiCharType($id, '4');

    if (isset($_POST['char_type5']) && $_POST['char_type5'] == '1')
        $this->admin_model->insertApiCharType($id, '5');

    if (isset($_POST['char_type6']) && $_POST['char_type6'] == '1')
        $this->admin_model->insertApiCharType($id, '6');

    if (isset($_POST['char_type7']) && $_POST['char_type7'] == '1')
        $this->admin_model->insertApiCharType($id, '7');

    if (isset($_POST['char_type8']) && $_POST['char_type8'] == '1')
        $this->admin_model->insertApiCharType($id, '8');

    if (isset($_POST['char_type9']) && $_POST['char_type9'] == '1')
        $this->admin_model->insertApiCharType($id, '9');
}?>

    <div class="content-padder content-background">
        <div class="uk-section-xsmall uk-section-default header">
            <div class="uk-container uk-container-large">
                <div class="uk-grid-small uk-width-1-1" uk-grid>
                    <div class="uk-width-3-4@s">
                        <h4><i class="fa fa-microchip" aria-hidden="true"></i> API <span class="uk-label uk-label-warning">Alpha</span></h4>
                    </div>
                    <div class="uk-width-1-4@s">
                        <a href="" class="" uk-toggle="target: #newApi">
                            <button class="uk-button uk-button-secondary uk-width-1-1"><i class="fa fa-wrench" aria-hidden="true"></i> <?= $this->lang->line('button_create'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@xl">
                    <!-- Generated ID -->
                    <?php if(isset($_GET['generated'])) {
                        $generated = $_GET['generated'];
                    } else { 
                        $generated = 'Nothing';
                    }?>
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-inline uk-width-1-3@s">
                            <div class="uk-form-controls">
                                <button class="uk-button uk-button-primary uk-width-1-1">Your ID is: <span class="uk-text-bold"><?= $generated ?></span></button>
                            </div>
                        </div>
                        <div class="uk-inline uk-width-2-3@s">
                            <input class="uk-input" type="text" name="example-input1-group2" placeholder="<?= base_url(); ?>api/getchar?guid=100000&id=<?= $generated ?>" disabled>
                        </div>
                    </div>
                    <!-- Generated ID -->
                <div>
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@xl">
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-info-circle" aria-hidden="true"></i> API Parameters</div>
                            <div class="uk-card-body">
                                <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-fade">
                                    <li><a href="#"><i class="fa fa-gamepad" aria-hidden="true"></i> Principal</a></li>
                                    <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Internal</a></li>
                                    <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i> Skins</a></li>
                                    <li><a href="#"><i class="fa fa-crosshairs" aria-hidden="true"></i> Kills</a></li>
                                    <li><a href="#"><i class="fa fa-male" aria-hidden="true"></i> Personal</a></li>
                                </ul>
                                <ul class="uk-switcher uk-margin">
                                    <li>
                                        <ul uk-accordion>
                                            <li>
                                                <a class="uk-accordion-title uk-text-warning uk-text-uppercase" href="#">char_principal</a>
                                                <div class="uk-accordion-content">
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharAccount</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharName</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharClass</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharRace</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharGender</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharLevel</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharOnline</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharMoney</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <p>Send specific parameters in the URL to obtain different values, 
                                            <a href="#" uk-toggle="target: #tg-parameters; animation: uk-animation-fade">PARAMETERS.</a>
                                            <div id="tg-parameters" class="uk-card uk-card-secondary uk-card-body uk-margin-small">
                                                <strong>api_username</strong>, Returns the name of the account<br>
                                                <strong>api_class</strong>, Returns the name of the class<br>
                                                <strong>api_race</strong>, Returns the name of the race<br>
                                                <strong>api_gender</strong>, Returns the name of the gender
                                            </div>
                                            Find examples for this 
                                            <a href="#" uk-toggle="target: #tg-example; animation: uk-animation-fade">Examples</a>
                                            <div id="tg-example" class="uk-card uk-card-secondary uk-card-body uk-margin-small">
                                                    <strong>api_username</strong> api.com/api/getchar/guid=1&id=1
                                                    <strong>&api_username</strong>
                                                    <strong>Multiple</strong> <strong>&api_username&api_class&api_gender</strong>
                                            </div>
                                            The first two parameters should always be guid = <strong>ID</strong> & id = <strong>IDTOKEN</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <ul uk-accordion>
                                            <li>
                                                <a class="uk-accordion-title uk-text-warning uk-text-uppercase" href="#">char_internal</a>
                                                <div class="uk-accordion-content">
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharXP</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharBankSlot</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharFlags</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharInstance</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharTitle</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharKnowTitle</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharLatency</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="uk-text-bold">It has no parameters</p>
                                    </li>
                                    <li>
                                        <ul uk-accordion>
                                            <li>
                                                <a class="uk-accordion-title uk-text-warning uk-text-uppercase" href="#">char_skins</a>
                                                <div class="uk-accordion-content">
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharSkin</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharFace</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharHairStyle</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharHairColor</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharFacilStyle</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="uk-text-bold">It has no parameters</p>
                                    </li>
                                    <li>
                                        <ul uk-accordion>
                                            <li>
                                                <a class="uk-accordion-title uk-text-warning uk-text-uppercase" href="#">char_kills</a>
                                                <div class="uk-accordion-content">
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharTotalKills</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharTodayKills</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharYesterdayKills</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="uk-text-bold">It has no parameters</p>
                                    </li>
                                    <li>
                                        <ul uk-accordion>
                                            <li>
                                                <a class="uk-accordion-title uk-text-warning uk-text-uppercase" href="#">char_personal</a>
                                                <div class="uk-accordion-content">
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharHealth</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharPower1</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharPower2</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharPower3</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharPower4</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharPower5</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharPower6</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharPower7</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="uk-text-bold">It has no parameters</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-info-circle" aria-hidden="true"></i> More API Parameters</div>
                            <div class="uk-card-body">
                                <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-fade">
                                    <li><a href="#"><i class="fa fa-street-view" aria-hidden="true"></i> Position</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> Times</a></li>
                                    <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Logins</a></li>
                                    <li><a href="#"><i class="fa fa-area-chart" aria-hidden="true"></i> Points</a></li>
                                </ul>
                                <ul class="uk-switcher uk-margin">
                                    <li>
                                        <ul uk-accordion>
                                            <li>
                                                <a class="uk-accordion-title uk-text-warning uk-text-uppercase" href="#">char_position</a>
                                                <div class="uk-accordion-content">
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharPositionX</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharPositionY</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharPositionZ</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharPositionO</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharPositionMap</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharPositionZone</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharTaxiMask</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharExploreZones</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="uk-text-bold">It has no parameters</p>
                                    </li>
                                    <li>
                                        <ul uk-accordion>
                                            <li>
                                                <a class="uk-accordion-title uk-text-warning uk-text-uppercase" href="#">char_times</a>
                                                <div class="uk-accordion-content">
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharTotalTime</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharLevelTime</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharLogoutTime</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharDeathExpTime</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="uk-text-bold">It has no parameters</p>
                                    </li>
                                    <li>
                                        <ul uk-accordion>
                                            <li>
                                                <a class="uk-accordion-title uk-text-warning uk-text-uppercase" href="#">char_logins</a>
                                                <div class="uk-accordion-content">
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharLoginAt</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="uk-text-bold">It has no parameters</p>
                                    </li>
                                    <li>
                                        <ul uk-accordion>
                                            <li>
                                                <a class="uk-accordion-title uk-text-warning uk-text-uppercase" href="#">char_points</a>
                                                <div class="uk-accordion-content">
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharTotalArena</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharTotalHonor</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharTodayHonor</p>
                                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> CharYesterdayHonor</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="uk-text-bold">It has no parameters</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="newApi" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title"><i class="fa fa-microchip" aria-hidden="true"></i> Create API TOKEN</h2>
            </div>
            <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-3@s">
                                <label class="uk-form-label uk-text-uppercase">CHAR_PRINCIPAL</label>
                                <div class="uk-form-controls">
                                    <label><input class="uk-checkbox" type="checkbox" name="char_type1" id="checkbox11" value="1"> Disable/Enable</label>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-3@s">
                                <label class="uk-form-label uk-text-uppercase">CHAR_INTERNAL</label>
                                <div class="uk-form-controls">
                                    <label><input class="uk-checkbox" type="checkbox" name="char_type2" id="checkbox22" value="1"> Disable/Enable</label>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-3@s">
                                <label class="uk-form-label uk-text-uppercase">CHAR_POSITION</label>
                                <div class="uk-form-controls">
                                    <label><input class="uk-checkbox" type="checkbox" name="char_type3" id="checkbox33" value="1"> Disable/Enable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-3@s">
                                <label class="uk-form-label uk-text-uppercase">CHAR_SKINS</label>
                                <div class="uk-form-controls">
                                    <label><input class="uk-checkbox" type="checkbox" name="char_type4" id="checkbox44" value="1"> Disable/Enable</label>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-3@s">
                                <label class="uk-form-label uk-text-uppercase">CHAR_TIMES</label>
                                <div class="uk-form-controls">
                                    <label><input class="uk-checkbox" type="checkbox" name="char_type5" id="checkbox55" value="1"> Disable/Enable</label>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-3@s">
                                <label class="uk-form-label uk-text-uppercase">CHAR_LOGINS</label>
                                <div class="uk-form-controls">
                                    <label><input class="uk-checkbox" type="checkbox" name="char_type6" id="checkbox66" value="1"> Disable/Enable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-3@s">
                                <label class="uk-form-label uk-text-uppercase">CHAR_POINTS</label>
                                <div class="uk-form-controls">
                                    <label><input class="uk-checkbox" type="checkbox" name="char_type7" id="checkbox77" value="1"> Disable/Enable</label>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-3@s">
                                <label class="uk-form-label uk-text-uppercase">CHAR_KILLS</label>
                                <div class="uk-form-controls">
                                    <label><input class="uk-checkbox" type="checkbox" name="char_type8" id="checkbox88" value="1"> Disable/Enable</label>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-3@s">
                                <label class="uk-form-label uk-text-uppercase">CHAR_PERSONAL</label>
                                <div class="uk-form-controls">
                                    <label><input class="uk-checkbox" type="checkbox" name="char_type9" id="checkbox99" value="1"> Disable/Enable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-alert-warning" uk-alert>
                            <p class="uk-text-center"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Remember that all API features are still under development</p>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_createApi"><?= $this->lang->line('button_create'); ?></button>
                </div>
            </form>
        </div>
    </div>
