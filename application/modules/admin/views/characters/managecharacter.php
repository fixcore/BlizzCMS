<?php if (isset($_POST['button_changeLevel'])) {
    $level = $_POST['newLevel'];
    $this->admin_model->insertChangeLevelChar($idlink, $level, $multiRealm, $idrealm);
} ?>

<?php if(isset($_POST['button_renamechar'])) {
    $newname = $_POST['newName'];
    $this->admin_model->insertCharRename($idlink, $newname, $multiRealm, $idrealm);
} ?>

<?php if(isset($_POST['button_unban'])) {
    $this->admin_model->insertUnbanChar($idlink, $multiRealm, $idrealm);
}?>

<?php if(isset($_POST['button_banchar'])) {
    $reason = $_POST['banchar_reason'];
    $this->admin_model->insertBanChar($idlink, $reason, $multiRealm, $idrealm);
}?>

<?php if(isset($_POST['button_customize'])) {
    $this->admin_model->insertCustomizeChar($idlink, $multiRealm, $idrealm);
} ?>

<?php if(isset($_POST['button_changerace'])) {
    $this->admin_model->insertChangeRaceChar($idlink, $multiRealm, $idrealm);
} ?>

<?php if(isset($_POST['button_changefaction'])) {
    $this->admin_model->insertChangeFactionChar($idlink, $multiRealm, $idrealm);
} ?>

    <div class="content-padder content-background">
        <div class="uk-section-xsmall uk-section-default header">
            <div class="uk-container uk-container-large">
                <div class="uk-grid-small uk-width-1-1" uk-grid>
                    <div class="uk-width-3-4@s">
                        <h4><i class="fa fa-user" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_char_manage'); ?> - 
                        <?= $this->m_general->getNameCharacterSpecifyGuid($multiRealm, $idlink); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-large">
                <?php if(isset($_GET['char'])) { ?>
                    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@xl">
                        <div>
                            <div class="uk-alert-danger" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <p><?= $this->lang->line('status_is_online'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if(isset($_GET['name'])) { ?>
                    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@xl">
                        <div>
                            <div class="uk-alert-danger" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <p><?= $this->lang->line('status_name_exist'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-3@m uk-child-width-1-3@xl">
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-arrows-v" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_change_level'); ?></div>
                            <div class="uk-card-body">
                                <form action="" method="post" accept-charset="utf-8">
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <div class="uk-inline uk-width-1-1">
                                                <input class="uk-input" name="newLevel" type="number" min="1" max="<?= $this->m_general->getMaxLevel(); ?>" placeholder="<?= $this->lang->line('column_level'); ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <button class="uk-button uk-button-primary uk-width-1-1" name="button_changeLevel" type="submit"><i class="fa fa-refresh" aria-hidden="true"></i> <?= $this->lang->line('button_change_level'); ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_rename'); ?></div>
                            <div class="uk-card-body">
                                <form action="" method="post" accept-charset="utf-8">
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <div class="uk-inline uk-width-1-1">
                                                <input class="uk-input" name="newName" type="text" placeholder="<?= $this->lang->line('panel_admin_rename'); ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <button class="uk-button uk-button-primary uk-width-1-1" name="button_renamechar" type="submit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_rename'); ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php if($this->m_general->getCharBanSpecifyGuid($idlink, $multiRealm)->num_rows()) { ?>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-check-circle" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_unban_char'); ?></div>
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
                                <div class="uk-card-header uk-card-secondary uk-text-center uk-text-uppercase"><i class="fa fa-ban" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_ban_char'); ?></div>
                                <div class="uk-card-body">
                                    <form action="" method="post" accept-charset="utf-8">
                                        <div class="uk-margin">
                                            <div class="uk-form-controls">
                                                <div class="uk-inline uk-width-1-1">
                                                    <input class="uk-input" name="banchar_reason" type="text" placeholder="<?= $this->lang->line('panel_admin_reason'); ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <div class="uk-form-controls">
                                                <button class="uk-button uk-button-danger uk-width-1-1" name="button_banchar" type="submit"><i class="fa fa-ban" aria-hidden="true"></i> <?= $this->lang->line('button_ban'); ?></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-3@m uk-child-width-1-3@xl">
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-cogs" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_customize'); ?></div>
                            <div class="uk-card-body">
                                <form action="" method="post">
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <button class="uk-button uk-button-primary uk-width-1-1" name="button_customize" type="submit"><i class="fa fa-cog" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_customize'); ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-cogs" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_change_race'); ?></div>
                            <div class="uk-card-body">
                                <form action="" method="post">
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <button class="uk-button uk-button-primary uk-width-1-1" name="button_changerace" type="submit"><i class="fa fa-cog" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_change_race'); ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-cogs" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_change_faction'); ?></div>
                            <div class="uk-card-body">
                                <form action="" method="post">
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <button class="uk-button uk-button-primary uk-width-1-1" name="button_changefaction" type="submit"><i class="fa fa-cog" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_change_faction'); ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-3@m uk-child-width-1-3@xl">
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-list" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_annotations'); ?></div>
                            <div class="uk-card-body">
                                <ul class="uk-list uk-list-bullet">
                                    <?php foreach($this->admin_model->getAnnotationsSpecifyChar($idlink, $idrealm)->result() as $charlistannotation) { ?>
                                        <li><?= $charlistannotation->annotation ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
