        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-1@l">
                <div class="uk-text-center">
                    <p class="uk-text-white">&copy; <?= date('Y'); ?> <?= $this->config->item('ProjectName'); ?>. <?= $this->lang->line('footer_rights'); ?></p>
                    <p><a target="_blank" href="https://github.com/fixcore/BlizzCMS" class="uk-button uk-button-text uk-text-white"><span uk-icon="icon: github"></span> <?= $this->lang->line('footer_powered'); ?></a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
