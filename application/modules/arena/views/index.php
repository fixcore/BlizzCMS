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
                    <div class="uk-principal-title" style="color: #fff;"><i class="ra ra-arena"></i> <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?></div>
                    <p class="uk-text-uppercase uk-text-bold" style="color: #fff;"><?=$this->lang->line('nav_arena_statistics');?></p>
                    <table class="uk-table uk-table-responsive uk-table-divider">
                        <thead>
                            <span class="uk-label uk-text-bold uk-label-danger"><?=$this->lang->line('arena_top_2v2');?></span>
                            <tr>
                                <th class="uk-width-small" style="color: #fff;"><i class="fa fa-sitemap" aria-hidden="true"></i> <?=$this->lang->line('column_team_name');?></th>
                                <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-users" aria-hidden="true"></i> <?=$this->lang->line('column_members');?></th>
                                <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('column_rating');?></th>
                                <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('column_games');?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($this->arena_model->getTopArena2v2($multiRealm)->result() as $tops2v2) { ?>
                                <tr>
                                    <td style="color: #fff;"><?=$tops2v2->name?></td>
                                    <td style="text-align: center;">
                                        <?php foreach ($this->arena_model->getMemberTeam($tops2v2->arenaTeamId, $multiRealm)->result() as $mmberteam) { ?>
                                            <img class="uk-border-circle" src="<?= base_url('assets/images/class/').$this->m_general->getClassIcon($this->arena_model->getRaceGuid($mmberteam->guid, $multiRealm)) ?>" title="<?= $this->arena_model->getNameGuid($mmberteam->guid, $multiRealm) ?>"  width="30px" height="30px" uk-tooltip="pos: bottom">
                                        <?php } ?>
                                    </td>
                                    <td style="color: #fff;text-align: center;"><?=$tops2v2->rating?></td>
                                    <td style="color: #fff;text-align: center;"><?=$tops2v2->seasonWins?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="uk-space-small"></div>
                    <table class="uk-table uk-table-responsive uk-table-divider">
                        <thead>
                            <span class="uk-label uk-text-bold uk-label-warning"><?=$this->lang->line('arena_top_3v3');?></span>
                            <tr>
                                <th class="uk-width-small" style="color: #fff;"><i class="fa fa-sitemap" aria-hidden="true"></i> <?=$this->lang->line('column_team_name');?></th>
                                <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-users" aria-hidden="true"></i> <?=$this->lang->line('column_members');?></th>
                                <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('column_rating');?></th>
                                <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('column_games');?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($this->arena_model->getTopArena3v3($multiRealm)->result() as $tops3v3) { ?>
                                <tr>
                                    <td style="color: #fff;"><?=$tops3v3->name?></td>
                                    <td style="color: #fff;text-align: center;">
                                        <?php foreach ($this->arena_model->getMemberTeam($tops3v3->arenaTeamId, $multiRealm)->result() as $mmberteam) { ?>
                                            <img class="uk-border-circle" src="<?= base_url('assets/images/class/').$this->m_general->getClassIcon($this->arena_model->getRaceGuid($mmberteam->guid, $multiRealm)) ?>" title="<?= $this->arena_model->getNameGuid($mmberteam->guid, $multiRealm) ?>"  width="30px" height="30px" uk-tooltip="pos: bottom">
                                        <?php } ?>
                                    </td>
                                    <td style="color: #fff;text-align: center;"><?=$tops3v3->rating?></td>
                                    <td style="color: #fff;text-align: center;"><?=$tops3v3->seasonWins?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="uk-space-small"></div>
                    <table class="uk-table uk-table-responsive uk-table-divider">
                        <thead>
                            <span class="uk-label uk-text-bold uk-label-success"><?=$this->lang->line('arena_top_5v5');?></span>
                            <tr>
                                <th class="uk-width-small" style="color: #fff;"><i class="fa fa-sitemap" aria-hidden="true"></i> <?=$this->lang->line('column_team_name');?></th>
                                <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-users" aria-hidden="true"></i> <?=$this->lang->line('column_members');?></th>
                                <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('column_rating');?></th>
                                <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('column_games');?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($this->arena_model->getTopArena5v5($multiRealm)->result() as $tops5v5) { ?>
                                <tr>
                                    <td style="color: #fff;"><?=$tops5v5->name?></td>
                                    <td style="text-align: center;">
                                        <?php foreach ($this->arena_model->getMemberTeam($tops5v5->arenaTeamId, $multiRealm)->result() as $mmberteam) { ?>
                                            <img class="uk-border-circle" src="<?= base_url('assets/images/class/').$this->m_general->getClassIcon($this->arena_model->getRaceGuid($mmberteam->guid, $multiRealm)) ?>" title="<?= $this->arena_model->getNameGuid($mmberteam->guid) ?>"  width="30px" height="30px" uk-tooltip="pos: bottom">
                                        <?php } ?>
                                    </td>
                                    <td style="color: #fff;text-align: center;"><?=$tops5v5->rating?></td>
                                    <td style="color: #fff;text-align: center;"><?=$tops5v5->seasonWins?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>
            </div>
            <div class="uk-width-1-6@l"></div>
        </div>
