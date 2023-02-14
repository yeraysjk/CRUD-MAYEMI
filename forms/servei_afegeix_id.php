<!DOCTYPE html>
<html>

<body>
  Nom: <?php echo $_POST["name"]; ?><br><br>
  Preu: <?php echo $_POST["price"]; ?><br><br>
  Descripció: <?php echo $_POST["description"]; ?><br><br>

<?php
  $nom = $_POST["name"];
  if ($nom == "") {
    echo "<img src='\'>";
  } else ()
?>

</body>
</html>

