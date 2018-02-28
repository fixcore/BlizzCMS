    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-6@l"></div>
            <div class="uk-width-4-6@l">
                <div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-4@l" uk-grid-parallax="translate:200">
                <?php foreach($this->vote_model->getVotes()->result() as $voteList) { ?>
                    <div class="uk-text-center">
                        <div class="uk-card uk-card-secondary uk-card-body">
                            <img src="<?= $voteList->image ?>">
                            <span class="uk-badge"><?= $this->lang->line('panel_points'); ?> <?= $voteList->points ?></span>
                            <hr class="uk-divider-icon">
                            <?php echo $this->vote_model->getFinallyTime($voteList->id, $voteList->time) ?>
                            <!-- COUNTDOWN -->
                            <div class="uk-grid-medium uk-child-width-auto uk-margin" uk-grid id="countdowntovote">
                                <div>
                                    <div class="uk-countdown-hours"></div>
                                </div>
                                <div>:</div>
                                <div>
                                    <div class="uk-countdown-minutes"></div>
                                </div>
                                <div>:</div>
                                <div>
                                    <div class="uk-countdown-seconds"></div>
                                </div>
                            </div>
                            <?= form_open(base_url('vote/votenow/'.$voteList->id)); ?>
                                <button class="uk-button uk-button-primary uk-width-1-1"><?= $this->lang->line('nav_vote'); ?></button>
                            <?= form_close(); ?>
                            <!-- COUNTDOWN -->
                        </div>
                    </div>

                    <?php
                    if($this->vote_model->getFinallyTime($voteList->id, $voteList->time) != '0,0,0'){
                        $hour = date('H', $this->vote_model->getFinallyTime($voteList->id, $voteList->time));
                        $minute = date('i', $this->vote_model->getFinallyTime($voteList->id, $voteList->time));
                        $second = date('s', $this->vote_model->getFinallyTime($voteList->id, $voteList->time));
                    }
                    else
                    {
                        $hour = '0';
                        $minute = '0';
                        $second = '0';
                    }
                    ?>

                    <script>  
                    jQuery(function(){  
                        var d = new Date();  
                        d.setHours(<?= $hour ?>,<?= $minute ?>,<?= $second ?>);  
                        UIkit.countdown('#countdowntovote', {date: d});  
                    })  
                    </script>
                <?php } ?>
                </div>
            </div>
            <div class="uk-width-1-6@l"></div>
        </div>
