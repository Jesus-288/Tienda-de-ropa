<?php
include 'conexion.php';
// Obtener ID y tabla a partir de la URL
$id = $_GET['ID'];

// Eliminar venta de la tabla correspondiente
$sql = "DELETE FROM compras WHERE ID=$id";

if ($conexion->query($sql) === TRUE) {
    header("location:consultar_compra.php");
} else {
    echo "Error al eliminar la venta: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>