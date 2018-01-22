    <!-- footer -->
    <div class="Pane Pane--full Pane--backgroundTop Pane--innerBorderTop" id="Page-footer">
        <div style="" class="Pane-content">
            <div data-region-selection="none" data-region="eu" data-locale="en-us" class="NavbarFooter is-regionless">
                <div class="NavbarFooter-overlay"></div>
                <div class="NavbarFooter-selector">
                    <div class="NavbarFooter-selectorToggle">
                        <div class="NavbarFooter-icon NavbarFooter-selectorToggleIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-globe"></use></svg>
                        </div>
                        <div class="NavbarFooter-selectorToggleLabel"><?= $this->lang->line('language_location'); ?></div>
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
                                        <div class="NavbarFooter-selectorOptionLabel"><?= $this->lang->line('language_location'); ?></div>
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
                <div class="NavbarFooter-copyright">&copy; <?= date('Y'); ?> <?= $this->config->item('ProjectName'); ?>. All rights reserved.</div>
                <div class="NavbarFooter-trademark"><a href="https://github.com/fixcore/BlizzCMS" title="FixCore"><i class="fa fa-github" aria-hidden="true"></i> Proudly powered by BlizzCMS</a></div>
                <div class="NavbarFooter-links NavbarFooter-subLinks">
                    <div class="NavbarFooter-link NavbarFooter-subLink">
                        <a href="" class="NavbarFooter-anchor" data-id="privacy" data-analytics="global-nav" data-analytics-placement="Footer - Privacy">Privacy</a>
                    </div>
                    <div class="NavbarFooter-link NavbarFooter-subLink">
                        <a href="" class="NavbarFooter-anchor" data-id="terms" data-analytics="global-nav" data-analytics-placement="Footer - Terms">Terms</a>
                    </div>
                </div>
                <div class="space-large"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?= base_url(); ?>assets/js/blizzard-51c65fab3150f2755194cd758daf1164c0dad3aead0fc90692e58adf1e6b236be345c7fd78a31fbd2254ddf82ce0db2edfb85c15197dd9d6c5f903e95514c14f.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/app-729cf5d6181c05cca2517e3f8388116e74a8b85db1639460ea0de2bd1ab924f9f623331638d05e77fe84e7c7f72956ecf4341d953387cb53b826383111bafd71.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/moment-d410e25d41b038388d05998a715a711bb67ef8da386035abe49d649ffd2a65f060fcd788d58ff9228c486fe0ac8854767e661bfe1e965b5df5ddd79ccf4ab6f8.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/root-ui-fe8efa099afd57be0d1d430408b7135f7848a498d971fcfbb6f8a2f57370fcef735a66d2bbbc87cd56c358a37ca5cae6fa972e5dbb6fd18184502849f2d97f10.js"></script>
</body>
</html>
