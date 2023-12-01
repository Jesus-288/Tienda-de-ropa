<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Eliminar Datos</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg fw-bold">
        <div class="container-fluid">
            <img src="\Proyecto\img\logo.jpeg" alt="logo" width="100" height="100">
            <h2 class="type">¡¡Estilo al Triple!!</h2>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="ms-auto" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-light " href="../paginas/eliminar.html">Regresar</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>


<?php
include 'conexion.php';


$sql = "SELECT * FROM venta_h";
$resultado = $conexion->query($sql);

?>

<div class="container">
        <h1>Eliminar Ventas</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Talla</th>
                    <th scope="col">Color</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Stock</th>
                </tr>
            </thead>
            <tbody>

<?php
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr> <td>".$fila["ID"]."</td>
        <td>".$fila["Nombre"]."</td> 
        <td>".$fila["Descripcion"]."</td> 
        <td>".$fila["Talla"]."</td> 
        <td>".$fila["Color"]."</td> 
        <td>".$fila["Categoria"]."</td> 
        <td>".$fila["Stock"]."</td>";
        
        echo "<td><a href='http://localhost/Proyecto/paginasPHP/elimH.php?ID=".$fila["ID"]."&venta_h=venta_h'>Eliminar Venta</a></td></tr>";
    }

    echo "</table>";
  
} else {
    echo "No hay datos disponibles en la categoría $categoria";
}

// Cerrar la conexión
$conexion->close();
?>
<style>
        .bg{
            background-color: rgb(76, 158, 158);
        }
        .type{
            font-family:Bradley Hand cursive;
        }
    </style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>