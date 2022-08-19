<?php get_header(); ?>
<div class="front-page-container">
    <?php
    $hero_s = get_field('hero_section');
    if( $hero_s['title'] || $hero_s['description'] || $hero_s['image'] ): ?>
    <section class="hero-section">
        <?php if( $hero_s['image'] ):
            echo wp_get_attachment_image($hero_s['image']['id'],'full','', array('class'=>'background'));
        endif; ?>

        <?php if( $hero_s['title'] || $hero_s['description'] ): ?>
            <div class="section-content">
                <?php if( $hero_s['title'] ): ?>
                    <h1 class="title"><?= $hero_s['title'] ?></h1>
                <?php endif; ?>

                <?php if( $hero_s['description'] ): ?>
                    <div class="description"><?= $hero_s['description'] ?></div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </section>
    <?php endif; ?>

    <?php
    $description_s = get_field('description_section');
    if( $description_s['title'] || $description_s['description'] ): ?>
    <section class="description-section">
        <div class="section-content">
            <?php if( $description_s['title'] ): ?>
                <h2 class="title"><?= $description_s['title'] ?></h2>
            <?php endif; ?>

            <?php if( $description_s['description'] ): ?>
                <h2 class="description"><?= $description_s['description'] ?></h2>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php
    $desc_section_with_image = get_field('description_section_with_image');
    if( $desc_section_with_image['title'] || $desc_section_with_image['description'] ): ?>
    <section class="image-with-description-section">
        <div class="section-content">
            <div class="left">
                <?php if( $desc_section_with_image['title'] ): ?>
                    <h2 class="title"><?= $desc_section_with_image['title'] ?></h2>
                <?php endif; ?>

                <?php if( $desc_section_with_image['description'] ): ?>
                    <h2 class="description"><?= $desc_section_with_image['description'] ?></h2>
                <?php endif; ?>
            </div>
            <div class="right">
                <?php if( $desc_section_with_image['image'] ): ?>
                    <div class="image-holder">
                        <?= wp_get_attachment_image($desc_section_with_image['image']['id'],'large'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php
    $description_s = get_field('description_section_2');
    if( $description_s['title'] || $description_s['description'] ): ?>
        <section class="description-section">
            <div class="section-content">
                <?php if( $description_s['title'] ): ?>
                    <h2 class="title"><?= $description_s['title'] ?></h2>
                <?php endif; ?>

                <?php if( $description_s['description'] ): ?>
                    <h2 class="description"><?= $description_s['description'] ?></h2>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $blocks = get_field('description_with_images_sections');
    if( $blocks ):
        foreach ( $blocks as $index => $section ): ?>
            <section class="image-with-description-section-2 <?= ( $index %2 != 0 ) ? ' white' : null; ?>">
                <div class="section-content">
                    <div class="left">
                        <?php if( $section['image'] ): ?>
                            <div class="image-holder">
                                <?= wp_get_attachment_image($section['image']['id'],'large'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="right">
                        <?php if( $section['title'] ): ?>
                            <h2 class="title"><?= $section['title'] ?></h2>
                        <?php endif; ?>

                        <?php if( $section['description'] ): ?>
                            <div class="description"><?= $section['description'] ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endforeach;
    endif; ?>

    <?php
    $members_s_1 = get_field('members_section_1');
    $members_s_2 = get_field('members_section_2');
    $members_s_3 = get_field('members_section_3');
    ?>
    <div class="members-sections-holder">
        <?php if(
                $members_s_1['title'] ||
                $members_s_1['description'] ||
                $members_s_1['members_1'] ||
                $members_s_1['members_2']
        ): ?>
        <section class="members-section founders-section" id="interview">
            <!--Desktop members-->
            <div class="desktop-members">
                <div class="col left-col">
                    <?php if( $members_s_1['members_1'] ): ?>
                        <div class="members">
                            <?php foreach( $members_s_1['members_1'] as $post ): setup_postdata($post);                                                         get_template_part('template-parts/member');
                            endforeach; wp_reset_postdata(); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col middle-col">
                    <?php if( $members_s_1['title'] ): ?>
                        <h2 class="title"><?= $members_s_1['title'] ?></h2>
                    <?php endif; ?>

                    <?php if( $members_s_1['description'] ): ?>
                        <div class="description"><?= $members_s_1['description'] ?></div>
                    <?php endif; ?>

                    <img class="radio-logo" src="<?= get_template_directory_uri() ?>/images/Bloomberg Radio.png" alt="interview-logo">

                    <audio controls>
                        <source src="<?= get_template_directory_uri() ?>/images/Meron Gribetz 040622.mp3" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio> 
                    <p class="interview-description">Bloomberg Businessweek Radio Interview</p>
                    <p class="interview-description">Inner Cosmos Founder and CEO Meron Gribetz sits down with Bloomberg Businessweek's Carol Massar Bloomberg Quicktake's Tim Stenovec.</p>
                    <p class="interview-description">© 2022 Bloomberg L.P. All rights reserved. Used with permission.</p>
                </div>

                <div class="col right-col">
                    <?php if( $members_s_1['members_2'] ): ?>
                        <div class="members">
                            <?php foreach( $members_s_1['members_2'] as $post ): setup_postdata($post);
                                get_template_part('template-parts/member');
                            endforeach; wp_reset_postdata(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <!--Desktop members END-->

            <!--Mobile members-->
            <div class="mobile-members">
                <?php if( $members_s_1['title'] ): ?>
                    <h2 class="title"><?= $members_s_1['title'] ?></h2>
                <?php endif; ?>

                <?php if( $members_s_1['description'] ): ?>
                    <div class="description"><?= $members_s_1['description'] ?></div>
                <?php endif; ?>

                <img class="radio-logo" src="<?= get_template_directory_uri() ?>/images/Bloomberg Radio.png" alt="interview-logo">

                <audio controls>
                    <source src="<?= get_template_directory_uri() ?>/images/Meron Gribetz 040622.mp3" type="audio/mp3">
                    Your browser does not support the audio element.
                </audio> 
                <p class="interview-description">Bloomberg Businessweek Radio Interview</p>
                <p class="interview-description">Inner Cosmos Founder and CEO Meron Gribetz sits down with Bloomberg Businessweek's Carol Massar Bloomberg Quicktake's Tim Stenovec.</p>
                <p class="interview-description">© 2022 Bloomberg L.P. All rights reserved. Used with permission.</p>
                <?php if( $members_s_1['members_1'] || $members_s_1['members_2'] ): ?>
                    <div class="members">
                        <?php if( $members_s_1['members_1'] ):
                            foreach( $members_s_1['members_1'] as $post ): setup_postdata($post); ?>
                                <div class="member-holder">
                                    <?php get_template_part('template-parts/member'); ?>
                                </div>
                            <?php endforeach; wp_reset_postdata();
                        endif;

                        if( $members_s_1['members_2'] ):
                            foreach( $members_s_1['members_2'] as $post ): setup_postdata($post); ?>
                                <div class="member-holder">
                                    <?php get_template_part('template-parts/member'); ?>
                                </div>
                            <?php endforeach; wp_reset_postdata();
                        endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <!--Mobile members END-->
        </section>
        <?php endif; ?>

        <?php
        if(
                $members_s_2['member_1'] ||
                $members_s_2['member_2'] ||
                $members_s_2['member_3'] ||
                $members_s_2['member_4'] ||
                $members_s_2['member_5'] ||
                $members_s_2['member_6']
        ): ?>
        <section class="members-section board-section">
            <!--Desktop members-->
            <div class="desktop-members">
                <div class="top-members">
                    <?php for( $i=1; $i<4; $i++ ): $member_index = 'member_'.$i; ?>
                        <div class="member-holder">
                            <?php if( $members_s_2[$member_index] ):
                                $member = new WP_Query(array(
                                    'post_type' => 'members',
                                    'posts_per_page' => 1,
                                    'post__in' => array($members_s_2[$member_index]->ID)
                                ));
                                while( $member->have_posts() ): $member->the_post();
                                    get_template_part( 'template-parts/member');
                                endwhile; wp_reset_postdata();
                            endif; ?>
                        </div>
                    <?php endfor; ?>
                </div>

                <?php if( $members_s_2['title'] || $members_s_2['description'] ): ?>
                    <div class="title-holder">
                        <?php if( $members_s_2['title'] ): ?>
                            <div class="title"><?= $members_s_2['title'] ?></div>
                        <?php endif; ?>

                        <?php if( $members_s_2['description'] ): ?>
                            <div class="description"><?= $members_s_2['description'] ?></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="bottom-members">
                    <?php for( $i=4; $i<8; $i++ ): $member_index = 'member_'.$i; ?>
                        <div class="member-holder">
                            <?php if( $members_s_2[$member_index] ):
                                $member = new WP_Query(array(
                                    'post_type' => 'members',
                                    'posts_per_page' => 1,
                                    'post__in' => array($members_s_2[$member_index]->ID)
                                ));
                                while( $member->have_posts() ): $member->the_post();
                                    get_template_part( 'template-parts/member');
                                endwhile; wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <!--Desktop members END-->

            <!--Mobile members-->
            <?php $members_order = ['member_2','member_1','member_3','member_5','member_4','member_6']; ?>
            <div class="mobile-members">
                <?php if( $members_s_2['title'] || $members_s_2['description'] ): ?>
                    <div class="title-holder">
                        <?php if( $members_s_2['title'] ): ?>
                            <div class="title"><?= $members_s_2['title'] ?></div>
                        <?php endif; ?>

                        <?php if( $members_s_2['description'] ): ?>
                            <div class="description"><?= $members_s_2['description'] ?></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="members">
                    <?php for( $i=0; $i<sizeof($members_order); $i++ ): $member_index = $members_order[$i]; ?>
                        <div class="member-holder">
                            <?php if( $members_s_2[$member_index] ):
                                $member = new WP_Query(array(
                                    'post_type' => 'members',
                                    'posts_per_page' => 1,
                                    'post__in' => array($members_s_2[$member_index]->ID)
                                ));
                                while( $member->have_posts() ): $member->the_post();
                                    get_template_part( 'template-parts/member');
                                endwhile; wp_reset_postdata();
                            endif; ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <!--Mobile members END-->
        </section>
        <?php endif; ?>

        <?php if( $members_s_3['title'] ||  $members_s_3['description'] || $members_s_3['members'] ): ?>
        <section class="members-section team-section">
            <?php if( $members_s_3['title'] ): ?>
                <h2 class="title"><?= $members_s_3['title'] ?></h2>
            <?php endif; ?>

            <?php if( $members_s_3['description'] ): ?>
                <div class="description"><?= $members_s_3['description'] ?></div>
            <?php endif; ?>

            <?php if( $members_s_3['members'] ): ?>
                <div class="members">
                    <?php foreach( $members_s_3['members'] as $post ): setup_postdata($post); ?>
                        <div class="member-holder">
                            <?php get_template_part( 'template-parts/member'); ?>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>
        </section>
        <?php endif; ?>
    </div>

    <?php
    $subscription_s = get_field('subscription_section');
    if( $subscription_s['title'] || $subscription_s['form_shortcode']  ): ?>
        <section class="subscription-form-section">
            <?php if( $subscription_s['title'] ): ?>
                <h2 class="title"><?= $subscription_s['title'] ?></h2>
            <?php endif; ?>

            <?php if( $subscription_s['form_shortcode'] ): ?>
                <div class="form-holder">
                    <!-- Begin Mailchimp Signup Form -->
                    <div id="mc_embed_signup">
                    <form action="https://innercosmos.us1.list-manage.com/subscribe/post-json?u=fcb13c48a081016403f31b756&amp;id=058f0ba591&amp;f_id=000e73e2f0&c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                        <!-- <h2>Subscribe</h2> -->
                    <!-- <div class="indicates-required"><span class="asterisk">*</span> indicates required</div> -->
                    <div class="mc-field-group">
                        <!-- <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span> -->
                    </label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email address">
                        <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                    </div>
                        <div id="mce-responses" class="clear foot">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_fcb13c48a081016403f31b756_058f0ba591" tabindex="-1" value=""></div>
                            <div class="optionalParent">
                                <div class="clear foot">
                                    <input type="submit" value="Join Us" name="subscribe" id="mc-embedded-subscribe" class="button">
                                    <!-- <p class="brandingLogo"><a href="http://eepurl.com/hZNex5" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p> -->
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                    <!--End mc_embed_signup-->
                </div>
            <?php endif; ?>
            <img src="<?php echo get_bloginfo('template_url') ?>/images/IC_favicon.png" alt="IC-icon">
        </section>
    <?php endif; ?>

    <?php
    $contact_s = get_field('contact_section');
    if( $contact_s['title'] || $contact_s['form_shortcode']  ): ?>
        <section class="contact-form-section">
            <?php if( $contact_s['title'] ): ?>
                <h2 class="title"><?= $contact_s['title'] ?></h2>
            <?php endif; ?>

            <?php if( $contact_s['form_shortcode'] ): ?>
                <div class="form-holder">
                    <?= do_shortcode($contact_s['form_shortcode']) ?>
                </div>
            <?php endif; ?>

            <?php if( $contact_s['subtitle'] ): ?>
                <h2 class="subtitle"><?= $contact_s['subtitle'] ?></h2>
            <?php endif; ?>
        </section>
    <?php endif; ?>
</div>
<?php get_footer();