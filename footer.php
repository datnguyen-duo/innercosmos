    </div><!--#main-page-content end-->
    <?php
    $copyright = get_field('copyright','option');
    $email = get_field('email','option');
    ?>
    <footer>
        <div class="section-content">
            <div class="left">

                <?php if( has_nav_menu('menu-2') ): ?>
                    <nav class="left-item">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'menu-2',
                                'container' => false,
                            )
                        ); ?>
                    </nav>
                <?php endif; ?>

                <?php if( $copyright ): ?>
                    <p class="left-item copyright"><?= $copyright ?></p>
                <?php endif; ?>
            </div>

            <div class="right">
                <ul>
                    <li>
                        <p>Website images by Santiago Ramón y Cajal</p>
                    </li>

                    <?php if( $email ): ?>
                        <li>
                            <p>Contact us at <a href="mailto:<?= $email; ?>"><?= $email; ?></a></p>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </footer>
</div><!--#page end-->

<?php wp_footer(); ?>

</body>

</html>
