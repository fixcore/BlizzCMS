    <header id="top-head">
        <?php $this->load->view('general/menu'); ?>
    </header>
    <br>
    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-6@l"></div>
            <div class="uk-width-4-6@l">
                <?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
                    $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
                ?>
                    <div class="uk-principal-title" style="color: #fff;"><i class="ra ra-axe"></i> <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?></div>
                    <p class="uk-text-uppercase uk-text-bold" style="color: #fff;"><?=$this->lang->line('nav_pvp_statistics');?></p>
                    <table class="uk-table uk-table-responsive uk-table-divider">
                        <thead>
                            <span class="uk-label uk-text-bold uk-label-danger"><?=$this->lang->line('pvp_top');?></span>
                            <tr>
                                <th class="uk-width-small" style="color: #fff;"><i class="fa fa-user" aria-hidden="true"></i> <?=$this->lang->line('column_name');?></th>
                                <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-flag" aria-hidden="true"></i> <?=$this->lang->line('column_faction');?></th>
                                <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-info-circle" aria-hidden="true"></i> <?=$this->lang->line('column_total_kills');?></th>
                                <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-crosshairs" aria-hidden="true"></i> <?=$this->lang->line('column_today_kills');?></th>
                                <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-crosshairs" aria-hidden="true"></i> <?=$this->lang->line('column_yersterday_kills');?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($this->pvp_model->getTop20PVP($multiRealm)->result() as $tops) { ?>
                                <tr>
                                    <td style="color: #fff;"><img class="uk-border-circle" src="<?= base_url('assets/images/races/').$this->m_general->getRaceIcon($tops->race) ?>" title="<?= $tops->name ?>"  width="30px" height="30px" uk-tooltip="pos: bottom"> <?= $tops->name ?></td>
                                    <td style="text-align: center;"><img class="uk-border-circle" src="<?= base_url(); ?>assets/images/factions/<?= $this->m_general->getFaction($tops->race) ?>.png"></td>
                                    <td style="color: #fff;text-align: center;"><?= $tops->totalKills ?></td>
                                    <td style="color: #fff;text-align: center;"><?= $tops->todayKills ?></td>
                                    <td style="color: #fff;text-align: center;"><?= $tops->yesterdayKills ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>
            </div>
            <div class="uk-width-1-6@l"></div>
        </div>
