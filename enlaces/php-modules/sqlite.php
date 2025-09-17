<?php

$id = $_GET["id"] ?? 0;

$stmt = $db->prepare("SELECT * FROM productos WHERE id = ?");
$stmt->execute([$id]);

$producto = $stmt->fetch(PDO::FETCH_ASSOC);

if ($producto) {
    echo "<h2>{$producto['nombre']}</h2>";
    echo "<p>{$producto['descripcion']}</p>";
    echo "<p>Precio: {$producto['precio']}</p>";
    echo "<img src='{$producto['imagen']}' alt='{$producto['nombre']}'>";
} else {
    echo "Producto no encontrado 😢";
}
?>
