    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-5@l"></div>
            <div class="uk-width-3-5@l">
                <div class="uk-text-center">
                    <?php if($this->m_general->getUserInfoGeneral($idlink)->num_rows()) { ?>
                    <div uk-lightbox>
                        <a href="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($idlink)); ?>">
                            <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($idlink)); ?>" width="120" height="120" alt="" />
                        </a>
                    </div>
                    <?php } else { ?>
                        <a href="<?= base_url('assets/images/profiles/default.png'); ?>">
                            <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/default.png'); ?>" width="120" height="120" alt="" />
                        </a>
                    </div>
                    <?php } ?>
                    <div class="uk-space-small"></div>
                    <div class="uk-principal-title uk-text-white"><?= $this->m_data->getUsernameID($idlink); ?></div>
                    <div class="uk-space-medium"></div>
                </div>
                <div class="uk-scrollspy-inview uk-animation-slide-bottom" uk-scrollspy-class="">
                    <hr class="uk-divider-icon">
                    <ul uk-accordion>
                        <?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
                            $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
                        ?>
                            <li class="uk-open">
                                <h3 class="uk-accordion-title uk-text-white"><i class="fa fa-server" aria-hidden="true"></i> <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?> - <?= $this->lang->line('panel_chars_list'); ?></h3>
                                <div class="uk-accordion-content">
                                    <div class="uk-grid uk-grid-small uk-child-width-1-6 uk-flex-center" uk-grid>
                                        <?php foreach($this->m_characters->getGeneralCharactersSpecifyAcc($multiRealm, $idlink)->result() as $chars) { ?>
                                            <div class="uk-text-center">
                                                <img class="uk-border-circle" src="<?= base_url('assets/images/class/'.$this->m_general->getClassIcon($chars->class)); ?>" title="<?= $chars->name ?> (Lvl <?= $chars->level ?>)" width="50" height="50" uk-tooltip>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="uk-width-1-5@l"></div>
        </div>
