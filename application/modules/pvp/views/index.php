            <div class="space-adaptive-medium"></div>
            <?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
                $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
            ?>
                <div class="container">
                    <div class="space-adaptive-small"></div>
                    <h2 class="h5 flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><i class="ra ra-axe"></i> <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?></h2>
                    <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><?=$this->lang->line('nav_pvp_statistics');?></h4>
                    <div class="space-adaptive-small"></div>
                    <table class="uk-table uk-table-responsive uk-table-divider">
                        <thead>
                            <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><span class="uk-label uk-label-danger"><?=$this->lang->line('pvp_top');?></span></h4>
                            <tr>
                                <th class="uk-width-small uk-text-white"><i class="fa fa-user" aria-hidden="true"></i> <?=$this->lang->line('column_name');?></th>
                                <th class="uk-width-small uk-text-white" style="text-align: center;"><i class="fa fa-flag" aria-hidden="true"></i> <?=$this->lang->line('column_faction');?></th>
                                <th class="uk-width-small uk-text-white" style="text-align: center;"><i class="fa fa-info-circle" aria-hidden="true"></i> <?=$this->lang->line('column_total_kills');?></th>
                                <th class="uk-width-small uk-text-white" style="text-align: center;"><i class="fa fa-crosshairs" aria-hidden="true"></i> <?=$this->lang->line('column_today_kills');?></th>
                                <th class="uk-width-small uk-text-white" style="text-align: center;"><i class="fa fa-crosshairs" aria-hidden="true"></i> <?=$this->lang->line('column_yersterday_kills');?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($this->pvp_model->getTop20PVP($multiRealm)->result() as $tops) { ?>
                                <tr>
                                    <td class="uk-text-white"><img class="uk-border-circle" src="<?= base_url('assets/images/races/').$this->m_general->getRaceIcon($tops->race) ?>" title="<?= $tops->name ?>"  width="30px" height="30px" uk-tooltip="pos: bottom"><?= $tops->name ?></td>
                                    <td style="text-align: center;"><img class="uk-border-circle" src="<?= base_url(); ?>assets/images/factions/<?= $this->m_general->getFaction($tops->race) ?>.png"></td>
                                    <td class="uk-text-white" style="text-align: center;"><?= $tops->totalKills ?></td>
                                    <td class="uk-text-white" style="text-align: center;"><?= $tops->todayKills ?></td>
                                    <td class="uk-text-white" style="text-align: center;"><?= $tops->yesterdayKills ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>
