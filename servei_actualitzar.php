<?php
include('head.php');
include('connexio_woo.php');
echo'<h1 >Actualitzar Productes</h1><br>';
echo'';
foreach($woocommerce->get('products') as $post) {
    $src_image = $post->images[0]->src;
echo '<form name="formulario" method = "POST"><div class= "row" style"= "margin-bottom:4px;">';
    echo '<div class = "col-md-1 form-group">ID DEL PRODUCTE:<input class = "form-control" id = "id" name = "id" value ="'.$post->id.'" readonly type = "text"></div>';
    echo '<div class = "col-md-1 form-group">IMATGE:<input class = "form-control img_responsive" name= "src_image" src="'.$src_image.'" style = "width:4vw;" type="image"></div>';
    echo '<div class = "col-md-2 form-group">NOM DEL PRODUCTE:<input class = "form-control" name = "name" value = "'.$post->name.'" style = "width:100px; text-align:left;" type = "text"></div>';
    echo '<div class = "col-md-4 form-group">DESCRIPCIO DEL PRODUCTE<input class = "form-control" name = "short_description" value = "'.strip_tags($post->short_description).'" type = "text"></div>';
    echo 
    '<div class = "col-md-1 form-group">
    <button class="btn center" formaction="servei_actualitzar_id.php">
    <i class="bi_bi-arrow-clockwise">
    </i>
    </button>
    </div>';
    echo "</form></div>";
    echo "<hr>";
}
?>