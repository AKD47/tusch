<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if (empty($product) || !$product->is_visible()) {
    return;
}
?>


<div <?php post_class('catalog__element'); ?>>

    <?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

    <div class="catalog__element--photo">
        <?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
    </div>

    <div class="catalog__element--descr">
        <?php do_action( 'woocommerce_shop_loop_item_title' ); ?>
        <p><?= CFS () -> get('short_description')?></p>
        <span>DETAIL</span>
    </div>

    <?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>

    <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
</div>