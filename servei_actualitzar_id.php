<html>   
    <head>
    <meta http-equiv="refresh" content="3; URL=index.php" />
    </head>
<?php
include('connexio_woo.php');
if($_POST["update"]){
$data = [
    'id' => $_POST["id"],
    'name' => $_POST["name"],
    'short_description' => $_POST["short_description"]
];
$woocommerce->put('products/'.$_POST["id"].'', $data);
echo "S'ha actualitzat el producte <br><br>";
}
if($_POST["delete"]){
  $woocommerce->delete('products/'.$_POST["id"].'');
  echo "S'ha borrat el producte <br><br>";
}
?>
<body>
  Id: <?php echo $_POST["id"]; ?><br><br>  
  Nom: <?php echo $_POST["name"]; ?><br><br>
  Descripció: <?php echo $_POST["short_description"]; ?><br><br>
  </body>
</html>