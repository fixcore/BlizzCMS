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
            <div class="row bg-title"></div>
            <!-- row -->
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">char_principal<a class="get-code" data-toggle="collapse" href="#pgr1" aria-expanded="true"><i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i></a></h3>
                        <div class="collapse m-t-15" id="pgr1" aria-expanded="true">
                            <li>CharAccount</li>
                            <li>CharName</li>
                            <li>CharClass</li>
                            <li>CharRace</li>
                            <li>CharGender</li>
                            <li>CharLevel</li>
                            <li>CharOnline</li>
                            <li>CharMoney</li>
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
                </div>
                <!-- -->
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">char_internal<a class="get-code" data-toggle="collapse" href="#pgr2" aria-expanded="true"><i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i></a></h3>
                        <div class="collapse m-t-15" id="pgr2" aria-expanded="true">
                            <li>CharXP</li>
                            <li>CharBankSlot</li>
                            <li>CharFlags</li>
                            <li>CharInstance</li>
                            <li>CharTitle</li>
                            <li>CharKnowTitle</li>
                            <li>CharLatency</li>
                        </div>
                        <p>It has no parameters</p>
                    </div>
                </div>
                <!-- -->
                <!-- -->
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">char_position<a class="get-code" data-toggle="collapse" href="#pgr3" aria-expanded="true"><i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i></a></h3>
                        <div class="collapse m-t-15" id="pgr3" aria-expanded="true">
                            <li>CharPositionX</li>
                            <li>CharPositionY</li>
                            <li>CharPositionZ</li>
                            <li>CharPositionO</li>
                            <li>CharPositionMap</li>
                            <li>CharPositionZone</li>
                            <li>CharTaxiMask</li>
                            <li>CharExploreZones</li>
                        </div>
                        <p>It has no parameters</p>
                    </div>
                </div>
                <!-- -->
            </div>
            <!-- /.row -->
            <!-- row -->
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">char_skins<a class="get-code" data-toggle="collapse" href="#pgr4" aria-expanded="true"><i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i></a></h3>
                        <div class="collapse m-t-15" id="pgr4" aria-expanded="true">
                            <li>CharSkin</li>
                            <li>CharFace</li>
                            <li>CharHairStyle</li>
                            <li>CharHairColor</li>
                            <li>CharFacilStyle</li>
                        </div>
                        <p>It has no parameters</p>
                    </div>
                </div>
                <!-- -->
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">char_times<a class="get-code" data-toggle="collapse" href="#pgr5" aria-expanded="true"><i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i></a></h3>
                        <div class="collapse m-t-15" id="pgr5" aria-expanded="true">
                            <li>CharTotalTime</li>
                            <li>CharLevelTime</li>
                            <li>CharLogoutTime</li>
                            <li>CharDeathExpTime</li>
                        </div>
                        <p>It has no parameters</p>
                    </div>
                </div>
                <!-- -->
                <!-- -->
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">char_logins<a class="get-code" data-toggle="collapse" href="#pgr6" aria-expanded="true"><i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i></a></h3>
                        <div class="collapse m-t-15" id="pgr6" aria-expanded="true">
                            <li>CharLoginAt</li>
                        </div>
                        <p>It has no parameters</p>
                    </div>
                </div>
                <!-- -->
            </div>
            <!-- /.row -->
            <!-- row -->
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">char_points<a class="get-code" data-toggle="collapse" href="#pgr7" aria-expanded="true"><i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i></a></h3>
                        <div class="collapse m-t-15" id="pgr7" aria-expanded="true">
                            <li>CharTotalArena</li>
                            <li>CharTotalHonor</li>
                            <li>CharTodayHonor</li>
                            <li>CharYesterdayHonor</li>
                        </div>
                        <p>It has no parameters</p>
                    </div>
                </div>
                <!-- -->
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">char_kills<a class="get-code" data-toggle="collapse" href="#pgr8" aria-expanded="true"><i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i></a></h3>
                        <div class="collapse m-t-15" id="pgr8" aria-expanded="true">
                            <li>CharTotalKills</li>
                            <li>CharTodayKills</li>
                            <li>CharYesterdayKills</li>
                        </div>
                        <p>It has no parameters</p>
                    </div>
                </div>
                <!-- -->
                <!-- -->
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">char_personal<a class="get-code" data-toggle="collapse" href="#pgr9" aria-expanded="true"><i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Content"></i></a></h3>
                        <div class="collapse m-t-15" id="pgr9" aria-expanded="true">
                            <li>CharHealth</li>
                            <li>CharPower1</li>
                            <li>CharPower2</li>
                            <li>CharPower3</li>
                            <li>CharPower4</li>
                            <li>CharPower5</li>
                            <li>CharPower6</li>
                            <li>CharPower7</li>
                        </div>
                        <p>It has no parameters</p>
                    </div>
                </div>
                <!-- -->
            </div>
            <!-- /.row -->
            <!-- Form START -->
            <div class="col-md-6">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Create API TOKEN</h3>
                    <p class="text-muted m-b-30 font-13"></p>
                    <form class="form-horizontal" method="post" action="">
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label for="exampleInputuname" class="col-sm-3 control-label">CHAR_PRINCIPAL</label>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input name="char_type1" value="1" id="checkbox11" type="checkbox">
                                        <label for="checkbox11">Use it</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label for="exampleInputuname" class="col-sm-3 control-label">CHAR_INTERNAL</label>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input name="char_type2" value="1" id="checkbox22" type="checkbox">
                                        <label for="checkbox22">Use it</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label for="exampleInputuname" class="col-sm-3 control-label">CHAR_POSITION</label>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input name="char_type3" value="1" id="checkbox33" type="checkbox">
                                        <label for="checkbox33">Use it</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label for="exampleInputuname" class="col-sm-3 control-label">CHAR_SKINS</label>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input name="char_type4" value="1" id="checkbox44" type="checkbox">
                                        <label for="checkbox44">Use it</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label for="exampleInputuname" class="col-sm-3 control-label">CHAR_TIMES</label>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input name="char_type5" value="1" id="checkbox55" type="checkbox">
                                        <label for="checkbox55">Use it</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label for="exampleInputuname" class="col-sm-3 control-label">CHAR_LOGINS</label>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input name="char_type6" value="1" id="checkbox66" type="checkbox">
                                        <label for="checkbox66">Use it</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label for="exampleInputuname" class="col-sm-3 control-label">CHAR_POINTS</label>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input name="char_type7" value="1" id="checkbox77" type="checkbox">
                                        <label for="checkbox77">Use it</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label for="exampleInputuname" class="col-sm-3 control-label">CHAR_KILLS</label>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input name="char_type8" value="1" id="checkbox88" type="checkbox">
                                        <label for="checkbox88">Use it</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label for="exampleInputuname" class="col-sm-3 control-label">CHAR_PERSONAL</label>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <div class="checkbox checkbox-success">
                                        <input name="char_type9" value="1" id="checkbox99" type="checkbox">
                                        <label for="checkbox99">Use it</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" name="button_createApi" class="btn btn-success waves-effect waves-light m-t-10"><i class="fa fa-wrench fa-fw"></i>Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Form END -->
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
        <!-- /.container-fluid -->
