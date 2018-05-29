<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tusch
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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

    <section class="catalog-pdf">
        <h3 class="catalog-pdf__title">KATALOGOVÉ LISTY</h3>
        <div class="catalog-pdf__elements">
            <div class="catalog-pdf__element">
                <h3 class="catalog-pdf__subtitle">Stavební mechanizace</h3>
                <a href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank">
                    <span>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem">
                    </span>
                    <span>
                    <p>Blokova pila TUSCH TL-900.pdf</p>
                    </span>
                </a>

                <a href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank">
                    <span><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span>
                    <span><p>Blokova pila TUSCH TL-701.pdf</p></span>
                </a>
                <a href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank">
                    <span><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span>
                    <span><p>Blokova pila TUSCH TL-701A.pdf</p></span>
                </a>
                <a href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank">
                    <span><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span>
                    <span><p>Stolova pila TUSCH TL-450.pdf</p></span>
                </a>
                <a href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank">
                    <span><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span>
                    <span><p>Stolova pila TUSCH TL-350.pdf</p></span>
                </a>
                <a href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank">
                    <span><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span>
                    <span><p>Stolni pila TUSCH MS-350.pdf</p></span>
                </a>
                <a href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank">
                    <span><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span>
                    <span><p>Stolni pila TUSCH TL-208.pdf</p></span></a>
                <a href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank">
                    <span><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span>
                    <span><p>Stolni pila TUSCH TL-210.pdf</p></span>
                </a>
                <a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Rezac spar TUSCH F-300/F-350.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Rezac spar TUSCH F-400/F-500.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Bruska povrchu TUSCH B-300.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Freza povrchu TUSCH FB-200E1.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Freza povrchu TUSCH FB-200E3.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Freza povrchu TUSCH FB-200S.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Freza povrchu TUSCH FB-255S.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Lamacka dlazby TUSCH LD-40.pdf</p></span></a>
            </div>
            <div class="catalog-pdf__element">
                <h3 class="catalog-pdf__subtitle">Diamantové nástroje TUSCH</h3><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Beton_armanovy beton.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Asfalt_cerstvy beton_piskovec.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Stavebni materialy_cihly_kotouce do blokovych pil.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Keramika_obklady.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Kamen_prirodni materialy.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Univerzalni pouziti_uhlove brusky.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Brusne diamantove nastroje.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>jadrove vrtaci korunky.pdf</p></span></a>
            </div>
            <div class="catalog-pdf__element">
                <h3 class="catalog-pdf__subtitle">Zařízení pro stavitelství</h3><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Badie na beton rady VF.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Badie na beton rady VN.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Badie na beton rady VN-RC.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Badie na beton BS.pdf</p></span></a><a
                        href="http://cs.tusch.cz/userfiles/file/TUSCH%20TL-701%20Block.pdf" target="_blank"><span><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/icons/pdf-icon.png" alt="lorem"></span><span>
              <p>Vyklopne automaticke kontejnery.pdf</p></span></a>
            </div>
        </div>
    </section>


</article><!-- #post-<?php the_ID(); ?> -->
