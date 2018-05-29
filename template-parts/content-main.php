<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tusch
 */

$news = new WP_Query(array(
    'posts_per_page' => 3,
    'category_name' => 'news'
));

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('main'); ?>>

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

    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->

    <section class="products">
        <h3 class="products__title">NAŠE PRODUKTY</h3>

        <p>Na našeich webových stránkách je pro vás připraveno přes 70 produktů té nejvyšší kvality a za velmi
            příznivé ceny.</p>

        <div class="products__wrapper">

            <a href="/shop" class="products__element">
                <div class="products__element--icon">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/drill.png" alt="icon">
                </div>
                <p>Stavební<br>mechanizace</p>
            </a>

            <a href="/shop" class="products__element">
                <div class="products__element--icon">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cir-saw.png" alt="icon">
                </div>
                <p>Diamantové<br>nástroje</p>
            </a>

            <a href="/shop" class="products__element">
                <div class="products__element--icon">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/concr-mixer.png" alt="icon">
                </div>

                <p>Transport betonu<br>Betonářské formy</p>
            </a>

            <a href="/shop" class="products__element">
                <div class="products__element--icon">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/pipes.png" alt="icon">
                </div>
                <p>Stavba potrubních<br>systémů - plast - ocel</p>
            </a>

            <a href="/shop" class="products__element">
                <div class="products__element--icon">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/hid-press.png" alt="icon">
                </div>
                <p>Drtiče<br>polystyrenu</p>
            </a>

        </div>
    </section>

    <section class="aktual">
        <h3 class="aktual__title">AKTUÁLNĚ</h3>
        <div class="aktual__wrapper">

            <!--loop-->
            <?php if ($news->have_posts()) : ?>

                <?php while ($news->have_posts()) :
                    $news->the_post(); ?>

                    <div class="aktual__element">

                        <p class="date"><?php the_time( 'd.m.Y' ); ?></p>
                        <h3 class="title"><?php the_title(); ?></h3>
                        <?php the_content(); ?>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
            <!--end loop-->
            <a href="/aktualne" class="archiv">Archiv</a>
        </div>
    </section>

</article><!-- #post-<?php the_ID(); ?> -->
