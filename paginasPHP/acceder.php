<?php 

include('conexion.php');
include('acceder.html');

$usuario=$_POST["correo"];
$contraseña=$_POST["contra"];
$confiContra=$_POST["confirm_password"];

if ($contraseña != $confiContra) {
    echo '<script>alert("Las contraseñas no coinciden. Vuelve a intentarlo.");</script>';
    die(); 
}
$hashed_contrasena = password_hash($contraseña, PASSWORD_DEFAULT);

$consulta= mysqli_query ($conexion, "SELECT*FROM sesion where correo='$usuario'
 and confirmar_contraseña='$confiContra'");

$nr=mysqli_num_rows($consulta);

if($nr==1){

    header( "location:http://localhost/Proyecto/paginas/acciones.html");
    
}else if($nr==0){
echo "error de identificacion";

}


$conexion -> close ();
 ?>


