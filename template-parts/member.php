<?php
$logo = get_field('logo');
?>
<div class="member">
    <div class="member-image">
        <div class="image">
            <?php the_post_thumbnail('large'); ?>
        </div>
    </div>

    <div class="member-name"><?php the_title() ?></div>

    <?php if( get_field('position') ): ?>
        <div class="member-title">
            <?php the_field('position') ?>
        </div>
    <?php endif; ?>

    <?php if( get_field('description') ): ?>
        <div class="member-description">
            <?php the_field('description') ?>
        </div>
    <?php endif; ?>

    <?php if( $logo ): ?>
        <div class="member-logo-container">
            <?= wp_get_attachment_image($logo['id'],'','',array('class'=>'member-logo')) ?>
        </div>
    <?php endif; ?>
</div>
