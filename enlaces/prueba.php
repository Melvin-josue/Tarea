<?php
$productos = [
  [
    "nombre" => "Producto 1",
    "precio" => 10.99,
    "descripcion" => "Descripción del producto 1",
    "image" => "products/flores/17.jpg"
  ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  body {
    font-family: sans-serif;
    background: #f0f0f0;
  }

  .producto {
    background: white;
    border: 1px solid #ccc;
    padding: 15px;
    margin: 20px;
    width: 250;
  }
</style>

<body>
  <?php foreach ($productos as $p): ?>
    <div class="producto">
      <img src="<?php echo $p["image"]; ?>" width="200"><br>
      <h2><?php echo $p["nombre"]; ?></h2>
      <p><?php echo $p["descripcion"]; ?></p>
      <strong><?php echo $p["precio"]; ?></strong>
    </div>
  <?php endforeach; ?>
</body>

</html>