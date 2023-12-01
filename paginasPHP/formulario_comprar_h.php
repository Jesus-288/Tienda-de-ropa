<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Formulario de Compra</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
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
                        <a class="nav-link btn btn-light " href="../paginas/secciones.html">Regresar</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
    <br>
  <div class="container mt-4">
    <h2>Formulario de Compra</h2>
    <?php
      if (isset($_GET['producto']) && isset($_GET['descripcion']) && isset($_GET['precio'])) {
        echo '<p>Producto: ' . $_GET['producto'] . '</p>';
        echo '<p>Descrición: ' . $_GET['descripcion'] . '</p>';
        echo '<p>Precio: $' . $_GET['precio'] . '</p>';
      }
    ?>

          <form action="inser.php" method="post">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" placeholder="Ingrese ID" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input class="form-control" id="direccion" name="direccion" rows="3" value="<?php echo $_GET['descripcion']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="talla">Talla</label>
                <input type="text" class="form-control" id="talla" name="talla" placeholder="Ingrese talla" required>
            </div>
            <div class="form-group">
                <label for="color">Producto</label>
                <input type="text" class="form-control" id="producto" name="producto" value="<?php echo $_GET['producto']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $_GET['precio']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ingrese categoria" required>
            </div>
            <div class="form-group">
                <label for="stock">Cantidad</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Ingrese stock" required><br>
            </div>

      <button type="submit" class="btn btn-success">Registrar</button>
    </form>
   
  </div>
  <style>
    .bg {
      background-color: rgb(76, 158, 158);
    }

    .type {
      font-family: Bradley Hand cursive;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
