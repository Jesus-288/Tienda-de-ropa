<?php
include 'conexion.php';
// Obtener ID y tabla a partir de la URL
$id = $_GET['ID'];

// Eliminar venta de la tabla correspondiente
$sql = "DELETE FROM venta_h WHERE ID=$id";

if ($conexion->query($sql) === TRUE) {
    header("location:http://localhost/Proyecto/paginasPHP/elidatosH.php");
} else {
    echo "Error al eliminar la venta: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>