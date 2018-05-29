<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tusch
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/assets/img/icons/favicon.ico">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

    <header class="header">
        <div class="header__wrapper">
            <a href="/" class="header__logo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/header-logo.png" alt="logo"></a>
            <div class="header__links">
                <a href="tel:<?= fw_get_db_customizer_option('phone_first');?>" class="header__link header__link--phone"><?= fw_get_db_customizer_option('phone_first');?></a>
                <a href="mailto:<?= fw_get_db_customizer_option('email');?>" class="header__link header__link--email"><?= fw_get_db_customizer_option('email');?></a>
                <span class="header__link header__link--address"><?= fw_get_db_customizer_option('address');?></span>
            </div>
        </div>
        <nav class="header__navigation">
            <a id="mobile-trigger" href="#" class="header__trigger">
                <span></span>
                <span></span>
                <span></span>
            </a>

            <?= wp_nav_menu( array(
                'theme_location'  => 'top_menu',//add menu to header
                'container'       => false,
                'menu_class'      => 'header__nav',
            ))?>

        </nav>
    </header><!-- #masthead -->

	<div id="content" class="site-content">
