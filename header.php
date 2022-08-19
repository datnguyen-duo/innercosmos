<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="stylesheet" href="https://use.typekit.net/sfm1jtz.css">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">

        <header>
            <img class="mobile" src="<?= get_template_directory_uri() ?>/images/mobile-header.png" alt="">
            <img class="tablet" src="<?=get_template_directory_uri() ?>/images/tablet-header.png" alt="">
            <img class="desktop" src="<?= get_template_directory_uri() ?>/images/header.png" alt="">
            <a href="<?= site_url() ?>/#" class="logo"></a>
            <div class="popup-button"></div>
        </header>

        <?php
        $popup = get_field('popup','option');
        if( $popup['title'] || $popup['form_shortcode']  ): ?>
            <div class="popup">
                <div class="section-content-container">
                    <div class="section-content">
                        <img class="close-popup" src="<?= get_template_directory_uri() ?>/images/times.svg" alt="">
                        <?php if( $popup['title'] ): ?>
                            <h2 class="title"><?= $popup['title'] ?></h2>
                        <?php endif; ?>
                        <div class="description">
                            <?php if( $popup['description'] ): ?>
                                <p><?= $popup['description'] ?></p>
                            <?php endif; ?>
                        </div>

                        <?php if( $popup['form_shortcode'] ): ?>
                            <div class="form-holder">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mc_embed_signup">
                            <form action="https://innercosmos.us1.list-manage.com/subscribe/post-json?u=fcb13c48a081016403f31b756&amp;id=058f0ba591&amp;f_id=000e73e2f0&c=?" method="get" id="mc-embedded-subscribe-form-popup" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
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
                                    <div class="response" id="mce-error-response-popup" style="display:none"></div>
                                    <div class="response" id="mce-success-response-popup" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_fcb13c48a081016403f31b756_058f0ba591" tabindex="-1" value=""></div>
                                    <div class="optionalParent">
                                        <div class="clear foot">
                                            <input type="submit" value="Join Us" name="subscribe" id="mc-embedded-subscribe-popup" class="button">
                                            <!-- <p class="brandingLogo"><a href="http://eepurl.com/hZNex5" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <!--End mc_embed_signup-->
                            </div>
                        <?php endif; ?>
                        <img class="icon" src="<?php echo get_bloginfo('template_url') ?>/images/IC_favicon.png" alt="IC-icon">
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div id="main-page-content">