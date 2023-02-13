<?php

require __DIR__ .'/vendor/autoload.php';
use Automattic\WooCommerce\Client;

//###Claus PC X
$url_wordpress = "http://192.168.56.101";
$url_wordpress_rest = $url_wordpress . '/index.php';
$woocommerce = new Client(
    $url_wordpress_rest,
    'ck_cbbcf49cae1001706254de84874ea53419620b61',
    'cs_db819b52440a02ca8a5b0df7ee8191ab6f59c5d7',
     [
        'wp_api' => true,
            'query_string_auth' => true
    ]
);
print_r($woocommerce->get('products'));
?>