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

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"><i class="fa fa-microchip fa-fw"></i>API <span class="label label-warning m-l-5">Dev</span></h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="#" data-toggle="modal" data-target="#createapi-modal">
                        <button class="waves-effect waves-light btn btn-success pull-right m-l-20"><i class="fa fa-wrench fa-fw"></i><?= $this->lang->line('button_crea'); ?></button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">API ID</h3>
                        <!-- generated START -->
                        <?php if(isset($_GET['generated'])) {
                            $generated = $_GET['generated'];
                        } else { 
                            $generated = 'Nothing';
                        }?>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn waves-effect waves-light btn-success">Your ID is: <?= $generated ?></button>
                            </span>
                            <input disabled type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" value="<?= base_url(); ?>api/getchar?guid=100000&id=<?= $generated ?>">
                        </div>
                        <!-- generated END -->
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">API Parameters</h3>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#principal" aria-controls="principal" role="tab" data-toggle="tab" aria-expanded="true">
                                    <span><i class="fa fa-gamepad"></i> Principal</span>
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#internal" aria-controls="internal" role="tab" data-toggle="tab" aria-expanded="false">
                                    <span><i class="fa fa-user-circle-o"></i> Internal</span>
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#position" aria-controls="position" role="tab" data-toggle="tab" aria-expanded="false">
                                    <span><i class="fa fa-street-view"></i> Position</span>
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#skins" aria-controls="skins" role="tab" data-toggle="tab" aria-expanded="false">
                                    <span><i class="fa fa-tasks"></i> Skins</span>
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#times" aria-controls="times" role="tab" data-toggle="tab" aria-expanded="false">
                                    <span><i class="fa fa-clock-o"></i> Times</span>
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#logins" aria-controls="logins" role="tab" data-toggle="tab" aria-expanded="false">
                                    <span><i class="fa fa-sign-in"></i> Logins</span>
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#points" aria-controls="points" role="tab" data-toggle="tab" aria-expanded="false">
                                    <span><i class="fa fa-area-chart"></i> Points</span>
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#kills" aria-controls="kills" role="tab" data-toggle="tab" aria-expanded="false">
                                    <span><i class="fa fa-crosshairs"></i> Kills</span>
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#personal" aria-controls="personal" role="tab" data-toggle="tab" aria-expanded="false">
                                    <span><i class="fa fa-male"></i> Personal</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="principal">
                                <div class="col-md-12">
                                    <h3 class="box-title">
                                        char_principal
                                        <a class="get-code" data-toggle="collapse" href="#pgr1" aria-expanded="true">
                                            <i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i>
                                        </a>
                                    </h3>
                                    <div class="collapse m-t-15" id="pgr1" aria-expanded="true">
                                        <ul class="list-icons">
                                            <li><i class="fa fa-chevron-right text-info"></i> CharAccount</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharName</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharClass</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharRace</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharGender</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharLevel</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharOnline</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharMoney</li>
                                        </ul>
                                    </div>
                                    <p>Send specific parameters in the URL to obtain different values, 
                                        <span class="mytooltip tooltip-effect-1">
                                            <span class="tooltip-item2">PARAMETERS</span>
                                            <span class="tooltip-content4 clearfix">
                                                <span class="tooltip-text2">
                                                    <strong>api_username</strong>, Returns the name of the account <br>
                                                    <strong>api_class</strong>, Returns the name of the class <br>
                                                    <strong>api_race</strong>, Returns the name of the race <br>
                                                    <strong>api_gender</strong>, Returns the name of the gender
                                                </span>
                                            </span>
                                        </span> .Find examples for this 
                                        <span class="mytooltip tooltip-effect-2">
                                            <span class="tooltip-item2">Examples</span>
                                            <span class="tooltip-content4 clearfix">
                                                <span class="tooltip-text2">
                                                    <strong>api_username</strong> api.com/api/getchar/guid=1&id=1<strong>&api_username</strong>
                                                    <strong>Multiple</strong>
                                                    <strong>&api_username&api_class&api_gender</strong>
                                                </span>
                                            </span>
                                        </span>
                                        The first two parameters should always be guid = <strong>ID</strong> & id = <strong>IDTOKEN</strong>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="internal">
                                <div class="col-md-12">
                                    <h3 class="box-title">
                                        char_internal
                                        <a class="get-code" data-toggle="collapse" href="#pgr2" aria-expanded="true">
                                            <i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i>
                                        </a>
                                    </h3>
                                    <div class="collapse m-t-15" id="pgr2" aria-expanded="true">
                                        <ul class="list-icons">
                                            <li><i class="fa fa-chevron-right text-info"></i> CharXP</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharBankSlot</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharFlags</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharInstance</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharTitle</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharKnowTitle</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharLatency</li>
                                        </ul>
                                    </div>
                                    <p>It has no parameters</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="position">
                                <div class="col-md-12">
                                    <h3 class="box-title">
                                        char_position
                                        <a class="get-code" data-toggle="collapse" href="#pgr3" aria-expanded="true">
                                            <i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i>
                                        </a>
                                    </h3>
                                    <div class="collapse m-t-15" id="pgr3" aria-expanded="true">
                                        <ul class="list-icons">
                                            <li><i class="fa fa-chevron-right text-info"></i> CharPositionX</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharPositionY</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharPositionZ</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharPositionO</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharPositionMap</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharPositionZone</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharTaxiMask</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharExploreZones</li>
                                        </ul>
                                    </div>
                                    <p>It has no parameters</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="skins">
                                <div class="col-md-12">
                                    <h3 class="box-title">
                                        char_skins
                                        <a class="get-code" data-toggle="collapse" href="#pgr4" aria-expanded="true">
                                            <i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i>
                                        </a>
                                    </h3>
                                    <div class="collapse m-t-15" id="pgr4" aria-expanded="true">
                                        <ul class="list-icons">
                                            <li><i class="fa fa-chevron-right text-info"></i> CharSkin</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharFace</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharHairStyle</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharHairColor</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharFacilStyle</li>
                                        </ul>
                                    </div>
                                    <p>It has no parameters</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="times">
                                <div class="col-md-12">
                                    <h3 class="box-title">
                                        char_times
                                        <a class="get-code" data-toggle="collapse" href="#pgr5" aria-expanded="true">
                                            <i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i>
                                        </a>
                                    </h3>
                                    <div class="collapse m-t-15" id="pgr5" aria-expanded="true">
                                        <ul class="list-icons">
                                            <li><i class="fa fa-chevron-right text-info"></i> CharTotalTime</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharLevelTime</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharLogoutTime</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharDeathExpTime</li>
                                        </ul>
                                    </div>
                                    <p>It has no parameters</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="logins">
                                <div class="col-md-12">
                                    <h3 class="box-title">
                                        char_logins
                                        <a class="get-code" data-toggle="collapse" href="#pgr6" aria-expanded="true">
                                            <i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i>
                                        </a>
                                    </h3>
                                    <div class="collapse m-t-15" id="pgr6" aria-expanded="true">
                                        <ul class="list-icons">
                                            <li><i class="fa fa-chevron-right text-info"></i> CharLoginAt</li>
                                        </ul>
                                    </div>
                                    <p>It has no parameters</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="points">
                                <div class="col-md-12">
                                    <h3 class="box-title">
                                        char_points
                                        <a class="get-code" data-toggle="collapse" href="#pgr7" aria-expanded="true">
                                            <i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i>
                                        </a>
                                    </h3>
                                    <div class="collapse m-t-15" id="pgr7" aria-expanded="true">
                                        <ul class="list-icons">
                                            <li><i class="fa fa-chevron-right text-info"></i> CharTotalArena</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharTotalHonor</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharTodayHonor</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharYesterdayHonor</li>
                                        </ul>
                                    </div>
                                    <p>It has no parameters</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="kills">
                                <div class="col-md-12">
                                    <h3 class="box-title">
                                        char_kills
                                        <a class="get-code" data-toggle="collapse" href="#pgr8" aria-expanded="true">
                                            <i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i>
                                        </a>
                                    </h3>
                                    <div class="collapse m-t-15" id="pgr8" aria-expanded="true">
                                        <ul class="list-icons">
                                            <li><i class="fa fa-chevron-right text-info"></i> CharTotalKills</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharTodayKills</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharYesterdayKills</li>
                                        </ul>
                                    </div>
                                    <p>It has no parameters</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="personal">
                                <div class="col-md-12">
                                    <h3 class="box-title">
                                        char_personal
                                        <a class="get-code" data-toggle="collapse" href="#pgr9" aria-expanded="true">
                                            <i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i>
                                        </a>
                                    </h3>
                                    <div class="collapse m-t-15" id="pgr9" aria-expanded="true">
                                        <ul class="list-icons">
                                            <li><i class="fa fa-chevron-right text-info"></i> CharHealth</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharPower1</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharPower2</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharPower3</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharPower4</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharPower5</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharPower6</li>
                                            <li><i class="fa fa-chevron-right text-info"></i> CharPower7</li>
                                        </ul>
                                    </div>
                                    <p>It has no parameters</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        <div id="createapi-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"><i class="fa fa-microchip fa-fw"></i> Create API TOKEN</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="">
                            <div class="form-group col-md-4">
                                <label class="control-label">CHAR_PRINCIPAL</label>
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input type="checkbox" name="char_type1" id="checkbox11" value="1">
                                        <label for="checkbox11">Disable/Enable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">CHAR_INTERNAL</label>
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input type="checkbox" name="char_type2" id="checkbox22" value="1">
                                        <label for="checkbox22">Disable/Enable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">CHAR_POSITION</label>
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input type="checkbox" name="char_type3" id="checkbox33" value="1">
                                        <label for="checkbox33">Disable/Enable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">CHAR_SKINS</label>
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input type="checkbox" name="char_type4" id="checkbox44" value="1">
                                        <label for="checkbox44">Disable/Enable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">CHAR_TIMES</label>
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input type="checkbox" name="char_type5" id="checkbox55" value="1">
                                        <label for="checkbox55">Disable/Enable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">CHAR_LOGINS</label>
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input type="checkbox" name="char_type6" id="checkbox66" value="1">
                                        <label for="checkbox66">Disable/Enable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">CHAR_POINTS</label>
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input type="checkbox" name="char_type7" id="checkbox77" value="1">
                                        <label for="checkbox77">Disable/Enable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">CHAR_KILLS</label>
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input type="checkbox" name="char_type8" id="checkbox88" value="1">
                                        <label for="checkbox88">Disable/Enable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">CHAR_PERSONAL</label>
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input type="checkbox" name="char_type9" id="checkbox99" value="1">
                                        <label for="checkbox99">Disable/Enable</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label text-danger"><i class="fa fa-exclamation-triangle fa-fw"></i> Remember that all API features are still under development</label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" name="button_createApi" class="btn btn-success waves-effect waves-light"><i class="fa fa-wrench fa-fw"></i><?= $this->lang->line('button_crea'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
