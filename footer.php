<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tusch
 */

?>

	</div><!-- #content -->

        <footer class="footer">
            <div class="footer__wrapper">
                <a href="/" class="footer__logo">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/footer-logo.png" alt="logo">
                </a>
                <div class="footer__links">
                    <a href="tel:<?= fw_get_db_customizer_option('phone_first');?>" class="footer__link footer__link--phone"><?= fw_get_db_customizer_option('phone_first');?></a>
                    <a href="mailto:<?= fw_get_db_customizer_option('email');?>" class="footer__link footer__link--email"><?= fw_get_db_customizer_option('email');?></a>
                    <span class="footer__link footer__link--address"><?= fw_get_db_customizer_option('address');?></span></div>
                <div class="footer__navigation">

                    <?= wp_nav_menu( array(
                        'theme_location'  => 'footer_menu',//add menu to footer
                        'container'       => false,
                        'menu_class'      => 'footer__nav',
                    ))?>

                    <form class="footer__form">
                        <input type="search" class="footer__form--field">
                        <input type="submit" value="" class="footer__form--submit">
                    </form>
                </div>
            </div>
            <div class="footer__art">© Tusch s. r. o. 2018. Všechna práva vyhrazena.</div>

            <div class="modal"><span class="modal__close">X</span>
                <p>Tuto sekci pro vás připravujeme.</p>
            </div>
            <div id="overlay"></div>

        </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
