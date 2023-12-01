<?php

include 'conexion.php';

$ID = $_GET['ID'];

$sql = "SELECT * FROM venta_n WHERE ID = $ID";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "0 results";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Registro</title>
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
                        <a class="nav-link btn btn-light " href="../paginasPHP/edita.php">Regresar</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>


    <div class="container">
        <h1>Editar Registro</h1>
        <form method="post" action="http://localhost/Proyecto/paginasPHP/actualizar.php">
            <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre1" name="nombre" value="<?php echo $row['Nombre']; ?>">
            </div>
            <div class="mb-3">
                <label for="celular" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="descrpcion1" name="descripcion" value="<?php echo $row['Descripcion']; ?>">
            </div>
            <div class="mb-3">
                <label for="lavarora" class="form-label">Talla</label>
                <input type="text" class="form-control" id="talla1" name="talla" value="<?php echo $row['Talla']; ?>">
            </div>
            <div class="mb-3">
                <label for="dia" class="form-label">Color</label>
                <input type="text" class="form-control" id="color1" name="color" value="<?php echo $row['Color']; ?>">
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="categoria1" name="categoria" value="<?php echo $row['Categoria']; ?>">
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Stock</label>
                <input type="text" class="form-control" id="stock1" name="stock" value="<?php echo $row['Stock']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>

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