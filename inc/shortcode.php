<?php


if(!function_exists('kites_sale_ads_short_code') ){

    function kites_sale_ads_short_code( $atts ){

        $value = shortcode_atts( array(

                    'id' => 1,

                ), $atts );

        ob_start();  

            ?>

                <div class="sale_ads" id="<?php esc_attr_e( $value['id'] ) ?>">
                    <h2>This Adspace is for sale</h2>
                    <a href="" class="buy_btn">Buy</a>
                </div>

            <?php


        return ob_get_clean();
    }

}


add_shortcode( 'sale_ads', 'kites_sale_ads_short_code' );








