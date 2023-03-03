<?php include "head.php"?>
<body>
<div>
<form action="servei_afegeix_id.php" method="post" enctype="multipart/form-data" class="php-email-form">
  <div class="col-md-6 form-group"> 
    Nom: <input type="text" name="name" class="form-control"><br>
  </div>
  Preu: <input type="text" name="price"><br>
  Descripcció: <input type="text" name="description"><br>
  Categoria: 
  <select name="categoria" id="cat">
    <?php
      include("connexio_woo.php");
      foreach($woocommerce->get('products/categories') as $cat) {
        if($cat->id != 15)
          echo "<option value='".$cat->id."'>".$cat->name."</option>";
      }
    ?>
  </select><br>
  Imatge: 
  <input type="file" name="fileToUpload" id="fileToUpload"><br>
  <input type="submit" value = "Crear">
  
</form>
    </div>
    </body>
    </html>
