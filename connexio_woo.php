<?php

require __DIR__ .'/assets/vendor/autoload.php';
use Automattic\WooCommerce\Client;

//###Claus PC X
$url_wordpress = "http://192.168.56.101";
$url_wordpress_rest = $url_wordpress .'/index.php';
$woocommerce = new Client(
    $url_wordpress_rest,
    'ck_31c9e477ed872e9b320ebc66bf525b882906ea25',//ck_8555359b2cd32427c6dcdcb4360cb71b4719efe1
    'cs_8ce87acf65b37c04fb6c96ce5d8adce77a322d77',//cs_2a37e28a76b7ebc077943e220d1cc00ca87a1c44
     [
        'wp_api' => true,
            'query_string_auth' => true
    ]
);
//print_r($woocommerce->get('products'));

?>