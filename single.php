<?php get_header(); ?>

<div class="post">
    <section class="post__banner">
        <?php the_title('<h1>', '</h1>'); ?>
        <div class="row">
            <div class="col"><p><?php the_category(', '); ?></p></div>
            <div class="col"><p><?php echo get_the_date(); ?></p></div>
        </div>
    </section>

    <section class="post__content">
        <div class="post__content--thumbnail">
            <?php echo wp_get_attachment_image( get_post_thumbnail_id(), "full", "", "" );  ?>
        </div>

        <h2 class="post__content--excerpt">
            <?php echo get_the_excerpt(); ?>
        </h2>

        <div class="post__content--wrap">
            <?php while( have_posts() ): the_post(); 
                the_content(); 
            endwhile; ?>
        </div>
    </section>

    <?php $related = get_posts( 
        array( 
            'category__in' => wp_get_post_categories($post->ID), 
            'numberposts' => 3, 
            'post__not_in' => array($post->ID) ) );
        if( $related ): ?>

        <section class="post__related">
            <h1>Related Resources</h1>
            <div class="posts">
                <?php foreach( $related as $post ): $file = get_field('file', get_the_id()) ?>
                    <a href="<?php the_permalink(); ?>" class="posts__item">
                        <div class="posts__item--thumbnail">
                            <?php if ($file): 
                                if ($file['type'] == 'audio') : ?>
                                    <audio controls>
                                        <source src="<?php echo $file['url']?>" type="audio/mp3">
                                        Your browser does not support the audio element.
                                    </audio> 
                                <?php endif;?>

                            <?php endif; ?>
                            <?php echo wp_get_attachment_image( get_post_thumbnail_id(), "medium", "", array( "class" => "posts__item--thumbnail" ) );  ?>
                        </div>
                        <div class="posts__item--content">
                            <?php the_title("<h3>", "</h3>"); ?>
                            <div class="row">
                                <span><?php foreach((get_the_category()) as $category) {
                                        echo $category->cat_name . ' ';
                                    }    
                                ?></span>
                                <span><?php echo get_the_date(); ?></span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <?php endif; wp_reset_postdata(); ?>
</div>
<?php
    $subscription_s = get_field('subscription_section', get_option('page_on_front'));
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
    $contact_s = get_field('contact_section', get_option('page_on_front'));
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

<?php get_footer();