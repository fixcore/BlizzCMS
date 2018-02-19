    <header id="top-head">
        <?php $this->load->view('general/menu'); ?>
    </header>
    <br>
    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-5@l"></div>
            <div class="uk-width-3-5@l">
                <div class="uk-principal-title uk-text-uppercase" style="color: #fff;"><i class="fa fa-question-circle-o" aria-hidden="true"></i> <?= $this->lang->line('nav_faq'); ?></div>
                <div class="uk-space-medium"></div>
                <div uk-grid>
                    <div class="uk-width-auto@m">
                        <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                            <li>
                                <a href="#" class="uk-text-white"> Menu1</a>
                            </li>
                            <li>
                                <a href="#" class="uk-text-white"> Menu2</a>
                            </li>
                        </ul>
                    </div>
                    <div class="uk-width-expand@m">
                        <ul id="component-tab-left" class="uk-switcher">
                            <li class="uk-text-white">
                                <ul uk-accordion="multiple: true">
                                    <li>
                                        <a class="uk-accordion-title uk-text-white" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Title 1</a>
                                        <div class="uk-accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title uk-text-white" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Title 2</a>
                                        <div class="uk-accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title uk-text-white" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Title 3</a>
                                        <div class="uk-accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="uk-text-white">
                                <ul uk-accordion="multiple: true">
                                    <li>
                                        <a class="uk-accordion-title uk-text-white" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Title 1</a>
                                        <div class="uk-accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title uk-text-white" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Title 2</a>
                                        <div class="uk-accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title uk-text-white" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Title 3</a>
                                        <div class="uk-accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-5@l"></div>
        </div>
