<?php
$data = [
    'id' => $_POST["id"],
    'name' => $_POST["name"],
    'short_description' => $_POST["short_description"]
];

print_r($woocommerce->put('products/'.$_POST["id"].'', $data));
?>