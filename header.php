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
                                <?= do_shortcode($popup['form_shortcode']) ?>
                            </div>
                        <?php endif; ?>
                        <img class="icon" src="<?php echo get_bloginfo('template_url') ?>/images/IC_favicon.png" alt="IC-icon">
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div id="main-page-content">