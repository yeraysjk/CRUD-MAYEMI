
<?php
/*-----pruebas*/
include('connexio_woo.php');
foreach($woocommerce->get('products') as $post) {
    $src_image = $post->images[0]->src;
    $product_url = $post->permalink;
    echo "<div class='gallery'>";
    echo "<h1>";
    print_r($post->name);
    echo "</h1>";
    echo "<div class='desc'";
    echo"<a target='_blank' href='".$product_url."'>
    <img src='".$src_image."' height='600px' width='400px' ";
    print_r($post->short_description);
    echo"PREU:";
    print_r($post->price);
    echo"$";
    echo">COMPRAR PRODUCTE</a>";
    echo "<hr style='width:100%;'/></div>";

    /*-----pruebas*/
} 
?>