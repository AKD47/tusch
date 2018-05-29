<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tusch
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <section class="banner">
                <div id="main-banner" class="banner__slider">
                    <div class="banner__slider--slide">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/main-slide-1.png" alt="slide">
                        <div class="banner__slider--descr">
                            <span class="icon">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/middle-logo.png" alt="logo">
                            </span>
                            <p>Vítejte v našem světě...</p>
                            <h1>SVĚTĚ STROJÍRENSKÉ VÝROBY</h1><a href="/shop">ZJISTIT VÍCE</a>
                        </div>
                    </div>
                    <div class="banner__slider--slide">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/main-slide-1.png" alt="slide">
                        <div class="banner__slider--descr">
                            <span class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/middle-logo.png" alt="logo"></span>
                            <p>Vítejte v našem světě...</p>
                            <h1>SVĚTĚ STROJÍRENSKÉ VÝROBY</h1><a href="/shop">ZJISTIT VÍCE</a>
                        </div>
                    </div>
                    <div class="banner__slider--slide">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/main-slide-1.png" alt="slide">
                        <div class="banner__slider--descr">
                            <span class="icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/middle-logo.png" alt="logo"></span>
                            <p>Vítejte v našem světě...</p>
                            <h1>SVĚTĚ STROJÍRENSKÉ VÝROBY</h1><a href="/shop">ZJISTIT VÍCE</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="catalog">

                <div class="catalog__wrapper">

                    <?php woocommerce_content(); ?>

                </div>

            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
