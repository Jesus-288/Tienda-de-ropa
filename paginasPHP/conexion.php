<?php
$bdhost="sql307.byethost7.com";
$bduser="b7_35527615";
$bdpass="ropa123";
$bd="b7_35527615_tienda";
$conexion=mysqli_connect($bdhost, $bduser, $bdpass, $bd);
if(!$conexion)
{
    die("Fallo la conexion a MySQL: " .mysqli_connect_error());

}else{
  
}
?>