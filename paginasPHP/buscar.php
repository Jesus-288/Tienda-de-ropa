<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Búsqueda en Base de Datos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <a class="nav-link btn btn-light " href="../paginas/buscar.html">Regresar</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
<div class="container mt-5">
  <h2 class="mb-4">Búsqueda en Base de Datos</h2>

  <form method="post" action="">
    <div class="mb-3">
      <label for="buscar" class="form-label">Buscar:</label>
      <input type="text" class="form-control" id="buscar" name="buscar">
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

   include 'conexion.php';

    $termino_busqueda = $_POST["buscar"];

    $sql = "SELECT * FROM venta_n WHERE ID LIKE '%$termino_busqueda%'";
    $result = $conexion->query($sql);

    
    if ($result->num_rows > 0) {
      echo '<h3 class="mt-4">Resultados de la búsqueda:</h3>';
      echo '<table class="table table-bordered">
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
              <tbody>';

      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['Nombre'] . "</td>";
            echo "<td>" . $row['Descripcion'] . "</td>";
            echo "<td>" . $row['Talla'] . "</td>";
            echo "<td>" . $row['Color'] . "</td>";
            echo "<td>" . $row['Categoria'] . "</td>";
            echo "<td>" . $row['Stock'] . "</td>";
        echo "</tr>";
      }

      echo '</tbody></table>';
    } else {
      echo '<p class="mt-4">No se encontraron resultados.</p>';
    }
    $conexion->close();
  }
  ?>

</div>
<style>
        .bg{
            background-color: rgb(76, 158, 158);
        }
        .type{
            font-family:Bradley Hand cursive;
        }
    </style>

</body>
</html>