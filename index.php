<?php
/**
 * Plugin Name: Turkish Liras Currency for WooCommerce
 * Plugin URI: http://buraksah.in/
 * Description: You can choose to new Turkish Liras Currency for WooCommerce
 * Version: 1
 * Author: Burak Şahin
 * Author URI: http://buraksah.in/
 * License: TLCFWC
 */

load_theme_textdomain( 'TLCFWC', TEMPLATEPATH.'/languages' );


function css() {
    echo '<link href="'.get_bloginfo('url').'/wp-content/plugins/WooCommerce-TL/css/style.css" media="all" rel="stylesheet" />';
}
add_action( 'wp_enqueue_scripts', 'css' );
 
function add_my_currency( $currencies ) {
     $currencies['TL'] = __( 'Turkish Liras Currency', 'TLCFWC' );
     return $currencies;
}
add_filter( 'woocommerce_currencies', 'add_my_currency' );
  
function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'TL': $currency_symbol = '<span class="try">t</span>'; break;
     }
     return $currency_symbol;
}
add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

?>
