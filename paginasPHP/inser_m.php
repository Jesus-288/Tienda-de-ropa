<?php

$id=$_POST["id"];
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$talla=$_POST["talla"];
$color=$_POST["color"];
$precio = $_POST["precio"];
$categoria=$_POST["categoria"];
$stock=$_POST["stock"];

include 'conexion.php';


$consulta="INSERT INTO venta_m (ID, Nombre, Descripcion, Talla, Color, precio, Categoria, Stock) 
VALUES('$id', '$nombre', '$descripcion', 
'$talla', '$color', '$categoria', '$stock')";

if (mysqli_query($conexion, $consulta)) {
header( "location:http://localhost/Proyecto/paginas/venta.html");
}else {
echo "Error de inserción: ".$consulta. "<br>". mysqli_error($conexion);
}
mysqli_close($conexion);

?>