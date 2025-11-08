<?php include('conex.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Libro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #fdfcfb, #e2d1c3);
      min-height: 100vh;
      color: #333;
    }
    .navbar {
      background: rgba(255,255,255,0.9);
      backdrop-filter: blur(6px);
    }
    .nav-link, .navbar-brand {
      color: #333 !important;
      text-decoration: none !important;
    }
    .form-box {
      background: #fff;
      max-width: 500px;
      margin: 80px auto;
      border-radius: 10px;
      padding: 2rem;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-semibold"><i class="bi bi-book me-2"></i>Librería Digital</a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link active" href="insertar.php">Registrar</a></li>
          <li class="nav-item"><a class="nav-link" href="consulta.php">Consulta</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="form-box">
    <h3 class="text-center mb-4">📚 Registrar nuevo libro</h3>
    <form method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label">Autor</label>
        <input type="text" name="autor" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Título</label>
        <input type="text" name="titulo" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Fecha de publicación</label>
        <input type="date" name="fecha_publicacion" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Portada (imagen)</label>
        <input type="file" name="portada" class="form-control" accept="image/*" required>
      </div>
      <button type="submit" class="btn btn-light w-100 fw-semibold border">Guardar Libro</button>
    </form>
  </div>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $autor = $_POST['autor'];
      $titulo = $_POST['titulo'];
      $fecha = $_POST['fecha_publicacion'];
      $imagen = addslashes(file_get_contents($_FILES['portada']['tmp_name']));

      $sql = "INSERT INTO libros (autor, titulo, fecha_publicacion, portada)
              VALUES ('$autor', '$titulo', '$fecha', '$imagen')";
      
      echo "<div class='container mt-4 text-center'>";
      if ($conn->query($sql) === TRUE) {
          echo "<div class='alert alert-success d-inline-block shadow'>Libro registrado correctamente.</div>";
      } else {
          echo "<div class='alert alert-danger d-inline-block shadow'>Error: " . $conn->error . "</div>";
      }
      echo "</div>";
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
