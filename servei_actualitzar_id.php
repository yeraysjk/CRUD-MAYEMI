include('connexio_woo.php');
<html>   
<?php
$data = [
    'id' => $_POST["id"],
    'name' => $_POST["name"],
    'short_description' => $_POST["short_description"]
];

print_r($woocommerce->put('products/'.$_POST["id"].'', $data));
?>
<body>
  Id: <?php echo $_POST["id"]; ?><br><br>  
  Nom: <?php echo $_POST["name"]; ?><br><br>
  Descripció: <?php echo $_POST["short_description"]; ?><br><br>
  </body>
</html>