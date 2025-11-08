<?php include('conex.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Librería Digital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)),
        url('https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=1400&q=60') center/cover no-repeat;
      color: #fff;
      min-height: 100vh;
    }
    .navbar { background: rgba(255,255,255,0.9); backdrop-filter: blur(6px); }
    .nav-link, .navbar-brand { color: #333 !important; text-decoration: none !important; }
    .btn-white { background: #fff; color: #333; border: none; }
    .btn-white:hover, .btn-white:focus { background: #fff; color: #333; }
  </style>
</head>
<body class="d-flex flex-column">

  <nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-semibold"><i class="bi bi-book me-2"></i>Librería Digital</a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="insertar.php">Registrar</a></li>
          <li class="nav-item"><a class="nav-link" href="consulta.php">Consulta</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="d-flex flex-column justify-content-center align-items-center text-center flex-grow-1">
    <h1 class="fw-bold mb-3">📚 Bienvenido a la Librería Digital</h1>
    <p class="mb-4">Administra tu colección de libros fácilmente.</p>
    <div>
      <a href="insertar.php" class="btn btn-white me-2"><i class="bi bi-plus-circle"></i> Registrar</a>
      <a href="consulta.php" class="btn btn-white"><i class="bi bi-search"></i> Consultar</a>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
