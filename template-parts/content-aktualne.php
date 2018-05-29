<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tusch
 */

$count_items = 4;//post for page value
$paged = get_query_var( 'paged', 1 ) ? get_query_var('paged') : 1;//current page
$news = new WP_Query(array(
    'posts_per_page' => $count_items,
    'category_name' => 'news',
    'page' => $paged
));
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

    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->

    <section class="aktual">
        <h3 class="aktual__title">AKTUÁLNĚ / ARCHIV</h3>
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

                    <ul class="pagination-custom">
                       <?php $big = 999999999; // need an unlikely integer
                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $news->max_num_pages,
                            ) );

                            wp_reset_postdata();?>
                    </ul>


            <?php endif; ?>
            <!--end loop-->

        </div>
    </section>

</article><!-- #post-<?php the_ID(); ?> -->
