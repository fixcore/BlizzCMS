    <!-- footer -->
    <div class="Pane Pane--full Pane--backgroundTop Pane--innerBorderTop" id="Page-footer">
        <div style="" class="Pane-content">
            <div data-region-selection="none" data-region="eu" data-locale="en-us" class="NavbarFooter is-regionless">

                <!-- button top -->
                <a href="#" uk-totop uk-scroll class="uk-position-small uk-position-center-right uk-overlay uk-overlay-primary uk-position-absolute"></a>
                <!-- button top -->

                <div class="NavbarFooter-overlay"></div>
                <div class="NavbarFooter-selector">
                    <div class="NavbarFooter-selectorToggle">
                        <div class="NavbarFooter-icon NavbarFooter-selectorToggleIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-globe"></use></svg>
                        </div>
                        <div class="NavbarFooter-selectorToggleLabel"><?= $this->lang->line('footer_language'); ?></div>
                        <div class="NavbarFooter-icon NavbarFooter-selectorToggleArrow">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-selector"></use></svg>
                        </div>
                    </div>
                    <div class="NavbarFooter-selectorDropdown">
                        <div class="NavbarFooter-selectorDropdownContainer">
                            <div class="NavbarFooter-selectorCloser">
                                <div class="NavbarFooter-selectorCloserAnchor">
                                    <div class="NavbarFooter-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-close"></use></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="NavbarFooter-selectorLocales NavbarFooter-selectorSection">
                                <div class="NavbarFooter-selectorSectionBlock">
                                    <a href="<?= base_url(); ?>" class="NavbarFooter-selectorLocale is-active is-selected NavbarFooter-selectorOption">
                                        <div class="NavbarFooter-selectorOptionLabel"><?= $this->lang->line('footer_language'); ?></div>
                                        <div class="NavbarFooter-selectorOptionCheck NavbarFooter-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-check"></use></svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="NavbarFooter-selectorTick"></div>
                        </div>
                    </div>
                </div>
                <div class="NavbarFooter-links NavbarFooter-mainLinks"></div>
                <div class="NavbarFooter-copyright">&copy; <?= date('Y'); ?> <?= $this->config->item('ProjectName'); ?>. <?= $this->lang->line('footer_rights'); ?></div>
                <div class="NavbarFooter-trademark"><a href="https://github.com/fixcore/BlizzCMS"><i class="fa fa-github" aria-hidden="true"></i> <?= $this->lang->line('footer_powered'); ?></a></div>
                <div class="NavbarFooter-links NavbarFooter-subLinks">
                    <div class="NavbarFooter-link NavbarFooter-subLink">
                        <a href="" class="NavbarFooter-anchor" data-id="privacy" data-analytics="global-nav" data-analytics-placement="Footer - Privacy"><?= $this->lang->line('footer_privacy'); ?></a>
                    </div>
                    <div class="NavbarFooter-link NavbarFooter-subLink">
                        <a href="" class="NavbarFooter-anchor" data-id="terms" data-analytics="global-nav" data-analytics-placement="Footer - Terms"><?= $this->lang->line('footer_terms'); ?></a>
                    </div>
                </div>
                <div class="space-large"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?= base_url(); ?>core/js/9013706011.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>core/js/blizzcms-general.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>core/js/moment.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>core/js/root-ui.js"></script>
</body>
</html>
