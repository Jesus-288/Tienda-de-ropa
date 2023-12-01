<?php

include 'conexion.php';

$id = $_POST['ID'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$talla = $_POST['talla'];
$color = $_POST['color'];
$categoria = $_POST['categoria'];
$stock = $_POST['stock'];

$sql = "UPDATE venta_h SET Nombre='$nombre', Descripcion='$descripcion', Talla='$talla', Color='$color', Categoria='$categoria', Stock='$stock' WHERE ID=$id";

if ($conexion->query($sql) === TRUE) {
    header("location:http://localhost/Proyecto/paginasPHP/editah.php");
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>