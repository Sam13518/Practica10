<?php include('conex.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Consultar Libros</title>
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
    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      background: #fff;
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
        <li class="nav-item"><a class="nav-link" href="insertar.php">Registrar</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">Consultar</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
  <h3 class="text-center mb-4">📖 Libros Registrados</h3>
  <div class="row">
    <?php
    $result = $conn->query("SELECT * FROM libros");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-md-4 mb-4">';
            echo '  <div class="card h-100">';
            echo '    <img src="data:image/jpeg;base64,' . base64_encode($row['portada']) . '" class="card-img-top" style="height:300px;object-fit:cover;">';
            echo '    <div class="card-body">';
            echo '      <h5 class="card-title">' . htmlspecialchars($row['titulo']) . '</h5>';
            echo '      <p class="card-text mb-1"><strong>Autor:</strong> ' . htmlspecialchars($row['autor']) . '</p>';
            echo '      <p class="card-text"><strong>Publicado:</strong> ' . htmlspecialchars($row['fecha_publicacion']) . '</p>';
            echo '    </div>';
            echo '  </div>';
            echo '</div>';
        }
    } else {
        echo "<p class='text-center text-muted'>No hay libros registrados.</p>";
    }
    ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
