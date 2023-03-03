<?php include("head.php")?>
<?php include('header.php')?>
<body>
<section id="contact" class="contact section-bg"> 
<div class="container" data-aos="fade-up"> 
<div class="section-title"> 
          <h2>Afegir producte</h2>
</div> 
<div class="row"> 
<div class="col-lg-6"> 
<form action="servei_afegeix_id.php" method="post" enctype="multipart/form-data">
  <div class="row"> 
    <div class="col-md-6 form-group"> 
      Nom: <input type="text" name="name" class="form-control"><br>
    </div>
    <div class="col-md-6 form-group"> 
      Preu: <input type="text" name="price" class="form-control"><br>
    </div>
    
    <div class="form-group mt-3"> 
    Categoria: 
      <select name="categoria" id="cat" class="form-control">
        <?php
          include("connexio_woo.php");
          foreach($woocommerce->get('products/categories') as $cat) {
            if($cat->id != 15)
              echo "<option value='".$cat->id."'>".$cat->name."</option>";
          }
        ?>
      </select><br>
      </div>
      <div class="form-group mt-3"> 
      Descripcció: <textarea name="description" class="form-control" rows="3"></textarea><br>
    </div>
    <div class="form-group mt-3">   
      Imatge: 
      <input type="file" name="fileToUpload" id="fileToUpload"><br>
        </div>
      <input type="submit" value = "Crear">
  </div>
</form>
    </div>
        </div>
        </div>
        </section>
<?php include('footer.php')?>
