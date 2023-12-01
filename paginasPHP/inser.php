<?php

$id=$_POST["id"];
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$talla=$_POST["talla"];
$producto=$_POST["producto"];
$precio = $_POST["precio"];
$categoria=$_POST["categoria"];
$stock=$_POST["stock"];

include 'conexion.php';


$consulta="INSERT INTO compras (ID, nombre, descripcion, talla, producto, precio, categoria, catidad) 
VALUES('$id', '$nombre', '$descripcion', 
'$talla', '$producto', '$precio', '$categoria', '$stock')";

if (mysqli_query($conexion, $consulta)) {
header( "location: consultar_compra.php");
}else {
echo "Error de inserción: ".$consulta. "<br>". mysqli_error($conexion);
}
mysqli_close($conexion);

?>