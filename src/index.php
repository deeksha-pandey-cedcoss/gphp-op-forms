<h1>The dropdown-maker element</h1>
<?php
$products = array("Mobile", "Laptop", "Tablet", "Camera");
echo "<pre>";
print_r($products);
echo "</pre>";

?>

<body>
  <br>
  <label for="drop">Dropdown is:</label>

  <select name="drop" id="drop">
    <?php
    foreach ($products as $key => $value) {

      echo "<option value=$value>$value</option>";
      echo $value;
    }
    ?>

  </select>
</body>
