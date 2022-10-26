<?php

/*
 * Plugin Name:       kites sale ads
 * Plugin URI:        #
 * Description:       kites sale ads
 * Version:           1.0.0
 * Author:            Kites Dev
 * Author URI:        https://kites.dev/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       kites-sale-ads
 * Domain Path:       /languages
*/ 


defined( 'ABSPATH' ) or die( 'Hey, you can not access via direct the file' );

define( 'KITES_SALE_ADS_ASSETS', plugin_dir_url( __FILE__ ) );

// short code

require_once plugin_dir_path( __FILE__ ) . 'inc/shortcode.php';

// Assets flies

if(!function_exists('kites_sale_ads_assets')){
    function kites_sale_ads_assets(){

        // css
        wp_enqueue_style( 'kites-sale-ads-style', KITES_SALE_ADS_ASSETS . 'assets/sale_ads.css', array(), '1.0.0', 'all' ); 
    }
}

add_action('wp_enqueue_scripts','kites_sale_ads_assets');
