<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<p class="val">Cena: <?php echo $product->get_price_html(); ?></p>
<p class="val">Dostupnost:<span class="val--sklad"><?php echo get_field('dostupnost');?></span></p>
<p class="val">Kód produktu:<span><?php echo get_field('kod');?></span></p>
<p class="val">Výrobce:<span><?php echo get_field('made');?></span></p>