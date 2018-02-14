<?php if(isset($_POST['button_removeADM'])) {
    $this->admin_model->getRemoveADMRank($idlink);
} ?>

<?php if(isset($_POST['button_addADM'])) {
    $this->admin_model->getADDADMRank($idlink);
} ?>

<?php if(isset($_POST['action_ban'])) {
    $reason = $_POST['action_reason'];
    $this->admin_model->insertBanAcc($idlink, $reason);
}?>

<?php if(isset($_POST['button_unban'])) {
    $this->admin_model->inserUnBanAcc($idlink);
} ?>

<?php if(isset($_POST['button_RemoveRankACCWeb'])) {
    $this->admin_model->removeRankAcc($idlink);
} ?>

<?php if(isset($_POST['button_AddRankACCWeb'])) {
    $gmlevel = $_POST['gmlevel'];
    $this->admin_model->insertRankAcc($idlink, $gmlevel);
} ?>

    <div id="content" data-uk-height-viewport="expand: true">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-grid-medium uk-grid-match" data-uk-grid>
                <div class="uk-width-1-1@l uk-width-1-1@xl">
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header uk-card-secondary">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4 class="uk-margin-remove-bottom"><span data-uk-icon="icon: user"></span> <?= $this->lang->line('panel_admin_user_manage'); ?> - <?= $this->m_data->getUsernameID($idlink) ?></h4></div>
                                <div class="uk-width-expand uk-text-right">
                                    <a href="#" class="uk-icon-link uk-margin-small-right" data-uk-icon="icon: info"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-3@m uk-child-width-1-3@xl">
                                <?php if($this->admin_model->getBanSpecify($idlink)->num_rows()) { ?>
                                    <div>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-check-circle" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_unban_account'); ?></div>
                                            <div class="uk-card-body">
                                                <form action="" method="post">
                                                    <button class="uk-button uk-button-primary uk-width-1-1" name="button_unban" type="submit"><i class="fa fa-check-circle" aria-hidden="true"></i><?= $this->lang->line('button_unban'); ?></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-header uk-card-secondary uk-text-center uk-text-uppercase"><i class="fa fa-ban" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_ban_account'); ?></div>
                                            <div class="uk-card-body">
                                                <form action="" method="post" accept-charset="utf-8">
                                                    <div class="uk-margin">
                                                        <div class="uk-form-controls">
                                                            <div class="uk-inline uk-width-1-1">
                                                                <input class="uk-input" name="action_reason" type="text" placeholder="<?= $this->lang->line('panel_admin_reason'); ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-margin">
                                                        <div class="uk-form-controls">
                                                            <button class="uk-button uk-button-danger uk-width-1-1" name="action_ban" type="submit"><i class="fa fa-ban" aria-hidden="true"></i> <?= $this->lang->line('button_ban'); ?></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-gamepad" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_rank_account'); ?></div>
                                        <div class="uk-card-body">
                                            <form action="" method="post">
                                                <?php if($this->m_data->getGmSpecify($idlink)->num_rows()) { ?>
                                                    <div class="uk-margin">
                                                        <div class="uk-form-controls">
                                                            <button class="uk-button uk-button-primary uk-width-1-1" name="button_RemoveRankACCWeb" type="submit"><i class="fa fa-user-times" aria-hidden="true"></i> <?= $this->lang->line('button_re_grant_account'); ?></button>
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="uk-margin">
                                                        <div class="uk-form-controls">
                                                            <div class="uk-inline uk-width-1-1">
                                                                <input class="uk-input" name="gmlevel" type="number" min="1" placeholder="<?= $this->lang->line('panel_admin_gmlevel'); ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-margin">
                                                        <div class="uk-form-controls">
                                                            <button class="uk-button uk-button-primary uk-width-1-1" name="button_AddRankACCWeb" type="submit"><i class="fa fa-user-plus" aria-hidden="true"></i> <?= $this->lang->line('button_grant_account'); ?></button>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-star" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_web_rank'); ?></div>
                                        <div class="uk-card-body">
                                            <form action="" method="post">
                                                <?php if($this->m_general->getPermissions($idlink) == 1) { ?>
                                                    <div class="uk-margin">
                                                        <div class="uk-form-controls">
                                                            <button class="uk-button uk-button-primary uk-width-1-1" name="button_removeADM" type="submit"><i class="fa fa-user-times" aria-hidden="true"></i> <?= $this->lang->line('button_re_grant_web_acc'); ?></button>
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="uk-margin">
                                                        <div class="uk-form-controls">
                                                            <button class="uk-button uk-button-primary uk-width-1-1" name="button_addADM" type="submit"><i class="fa fa-user-plus" aria-hidden="true"></i> <?= $this->lang->line('button_grant_web_acc'); ?></button>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1@l uk-width-1-1@xl">
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header uk-card-secondary">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4 class="uk-margin-remove-bottom"><span data-uk-icon="icon: user"></span> <?= $this->lang->line('panel_admin_general_info'); ?></h4></div>
                                <div class="uk-width-expand uk-text-right">
                                    <a href="#" class="uk-icon-link uk-margin-small-right" data-uk-icon="icon: info"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <table class="uk-table uk-table-justify uk-table-divider">
                                <thead>
                                    <tr>
                                        <th><?= $this->lang->line('form_first_name'); ?></th>
                                        <th><?= $this->lang->line('form_last_name'); ?></th>
                                        <th><?= $this->lang->line('form_username'); ?></th>
                                        <th><?= $this->lang->line('form_email'); ?></th>
                                        <th><?= $this->lang->line('form_security_question'); ?></th>
                                        <th><?= $this->lang->line('form_secret_answer'); ?></th>
                                        <th><?= $this->lang->line('form_birth_date'); ?></th>
                                        <th><?= $this->lang->line('panel_member'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($this->m_general->getUserInfoGeneral($idlink)->result() as $ginfo) { ?>
                                        <tr>
                                            <td><?= $ginfo->name ?></td>
                                            <td><?= $ginfo->surname ?></td>
                                            <td><?= $ginfo->username ?></td>
                                            <td><?= $ginfo->email ?></td>
                                            <td><?= $this->m_general->getSpecifyQuestion($ginfo->question); ?></td>
                                            <td><?= $ginfo->answer ?></td>
                                            <td><?= $ginfo->year.'-'.$ginfo->month.'-'.$ginfo->day ?></td>
                                            <td><?= date('Y-m-d', $ginfo->date); ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1@l uk-width-1-1@xl">
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header uk-card-secondary">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4 class="uk-margin-remove-bottom"><span data-uk-icon="icon: users"></span> <?= $this->lang->line('panel_chars_list'); ?></h4></div>
                                <div class="uk-width-expand uk-text-right">
                                    <a href="#" class="uk-icon-link uk-margin-small-right" data-uk-icon="icon: info"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <ul uk-accordion>
                                <?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
                                    $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
                                ?>
                                    <li>
                                        <a class="uk-accordion-title" href="#"><span data-uk-icon="icon: server"></span> Realm - <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?></a>
                                        <div class="uk-accordion-content">
                                            <table class="uk-table uk-table-justify uk-table-divider">
                                                <thead>
                                                    <tr>
                                                        <th>Guid</th>
                                                        <th><?= $this->lang->line('column_name'); ?></th>
                                                        <th><?= $this->lang->line('column_race'); ?></th>
                                                        <th><?= $this->lang->line('column_class'); ?></th>
                                                        <th><?= $this->lang->line('column_level'); ?></th>
                                                        <th><?= $this->lang->line('column_money'); ?></th>
                                                        <th><?= $this->lang->line('column_total_kills'); ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($this->m_characters->getGeneralCharactersSpecifyAcc($multiRealm, $idlink)->result() as $chars) { ?>
                                                        <tr>
                                                            <td>
                                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid ?>/<?= $charsMultiRealm->id ?>"><?= $chars->guid ?></a>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid; ?>/<?= $charsMultiRealm->id ?>"><?= $chars->name ?></a>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid; ?>/<?= $charsMultiRealm->id ?>"><?= $this->m_general->getRaceName($chars->race); ?></a>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid; ?>/<?= $charsMultiRealm->id ?>"><?= $this->m_general->getNameClass($chars->class); ?></a>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid; ?>/<?= $charsMultiRealm->id ?>"><?= $chars->level ?></a>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid; ?>/<?= $charsMultiRealm->id ?>"><?= $chars->money ?></a>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid; ?>/<?= $charsMultiRealm->id ?>"><?= $chars->totalKills ?></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@s uk-width-1-3@l uk-width-1-3@xl">
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><span data-uk-icon="icon: list"></span> <?= $this->lang->line('panel_admin_annotations'); ?></div>
                        <div class="uk-card-body">
                            <ul class="uk-list uk-list-bullet">
                                <?php foreach($this->admin_model->getAnnotationsSpecify($idlink)->result() as $annotations) { ?>
                                    <li><?= $annotations->annotation ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@s uk-width-1-3@l uk-width-1-3@xl">
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><span data-uk-icon="icon: list"></span> <?= $this->lang->line('panel_admin_mov_forum'); ?></div>
                        <div class="uk-card-body">
                            <ul class="uk-list uk-list-bullet">
                                <li>forum actions</li>
                                <li>forum actions</li>
                                <li>forum actions</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@s uk-width-1-3@l uk-width-1-3@xl">
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><span data-uk-icon="icon: list"></span> <?= $this->lang->line('panel_admin_last_comments'); ?></div>
                        <div class="uk-card-body">
                            <ul class="uk-list uk-list-bullet">
                                <li>comments actions</li>
                                <li>comments actions</li>
                                <li>comments actions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="uk-section uk-section-small uk-text-center">
            <hr>
            <span class="uk-text-muted uk-text-small"><span data-uk-icon="icon: github-alt"></span> Proudly powered by BlizzCMS</span>
        </footer>
    </div>
