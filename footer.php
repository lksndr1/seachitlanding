<footer id="footer" class="footer">
    <div class="container">
        <div class="footer__flex-container">
            <div class="footer__about-us">
                <h3>About Us</h3>
                <p><?php echo get_field('about_us', 'option') ?></p>
            </div>
            <div class="footer__menu">
                <div class="footer__menu__links">
                    <h3>Links</h3>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_1',
                            'container' => 'nav',
                            'container_class' => 'footer-menu',
                            'menu_class' => 'footer__menu__links-list',
                            'fallback_cb' => false,
                        ));
                    ?>
                </div>
                <div class="footer__menu__networks">
                    <h3>Networks</h3>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_2',
                            'container' => 'nav',
                            'container_class' => 'footer-menu',
                            'menu_class' => 'footer__menu__networks-list',
                            'fallback_cb' => false,
                        ));
                    ?>
                </div>
            </div>
        </div>
        <p class="footer__date">© <span><?php echo date("Y"); ?></span> Maxter Online Slot Game, designed by Th3s</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>