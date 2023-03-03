<?php
include('head.php');
include('header.php');
include('connexio_woo.php');
?>
<body>
<section id="contact" class="contact section-bg"> 
<div class="container" data-aos="fade-up"> 
<div class="section-title"> 
          <h2>Actualitzar/Borrar productes</h2>
</div> 
<div class="row"> 
<div class="col-lg-6"> 
<?php
foreach($woocommerce->get('products') as $post) {
    $src_image = $post->images[0]->src;
    echo '<form action="servei_actualitzar_id.php" name="formulario" method = "POST"><div class= "row" style"= "margin-bottom:4px;">';
    echo '<div class = "col-md-3 form-group">ID DEL PRODUCTE:<input class = "form-control" id = "id" name = "id" value ="'.$post->id.'" readonly type = "text"></div>';
    echo '<div class = "col-md-3 form-group">IMATGE:<input class = "form-control img_responsive" name= "src_image" src="'.$src_image.'" style = "width:4vw;" type="image"></div>';
    echo '<div class = "col-md-4 form-group">NOM DEL PRODUCTE:<input class = "form-control" name = "name" value = "'.$post->name.'" style = "width:100px; text-align:left;" type = "text"></div>';
    echo '<div class = "col-md-4 form-group">DESCRIPCIO DEL PRODUCTE<input class = "form-control" name = "short_description" value = "'.strip_tags($post->short_description).'" type = "text"></div>';
    echo '<input type="submit" value = "Actualitzar" name = "update">';
    echo '<input type="submit" value = "Borrar" name = "delete">';
    echo "</div>"
    echo "</form>";
    echo "<hr>";
}
?>
    </div>
        </div>
        </div>
        </section>
        <?php include('footer.php')?>