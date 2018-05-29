<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tusch
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

    <section class="banner">
        <div id="main-banner" class="banner__slider">
            <div class="banner__slider--slide">
                <img src="<?php echo get_field('slide_1'); ?>" alt="slide">
                <div class="banner__slider--descr">
                        <span class="icon">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/middle-logo.png" alt="logo">
                        </span>
                    <p>Vítejte v našem světě...</p>
                    <h1>SVĚTĚ STROJÍRENSKÉ VÝROBY</h1><a href="/shop">ZJISTIT VÍCE</a>
                </div>
            </div>
            <div class="banner__slider--slide">
                <img src="<?php echo get_field('slide_2'); ?>" alt="slide">
                <div class="banner__slider--descr"><span class="icon">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/middle-logo.png" alt="logo">
                        </span>
                    <p>Vítejte v našem světě...</p>
                    <h1>SVĚTĚ STROJÍRENSKÉ VÝROBY</h1>
                    <a href="/shop">ZJISTIT VÍCE</a>
                </div>
            </div>
            <div class="banner__slider--slide">
                <img src="<?php echo get_field('slide_3'); ?>" alt="slide">
                <div class="banner__slider--descr">
                        <span class="icon">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/middle-logo.png" alt="logo">
                        </span>
                    <p>Vítejte v našem světě...</p>
                    <h1>SVĚTĚ STROJÍRENSKÉ VÝROBY</h1><a href="/shop">ZJISTIT VÍCE</a>
                </div>
            </div>
        </div>
    </section>
    <section class="reference">
        <div class="entry-content">
            <?php the_content(); ?>
        </div><!-- .entry-content -->
    </section>

</article><!-- #post-<?php the_ID(); ?> -->
