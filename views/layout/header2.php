<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= base_url ?>assets/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url ?>assets/css/sweetalert2.css" />
  <script src="<?= base_url ?>assets/js/all.min.js"></script>
  <script src="<?= base_url ?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url ?>assets/js/jquery-3.2.1.min.js"></script>
  <script src="<?= base_url ?>assets/js/sweetalert2.all.min.js"></script>
  <link rel="icon" href="<?= base_url ?>assets/img/Dionysus - Logo.ico" />
  <title>Dionysus</title>
</head>

<body class="d-flex flex-column h-100">
  <header>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url ?>">Dionysus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?= base_url ?>motel/dirMotel">Moteles</a>
            </li>

            <?php if (isset($_SESSION['admin'])) : ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Administración
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" aria-current="page" href="<?= base_url ?>representante/lista">Representantes</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" aria-current="page" href="<?= base_url ?>motel/index">Moteles</a></li>
                  <li><a class="dropdown-item" aria-current="page" href="<?= base_url ?>habitacion/lista">Habitaciones</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" aria-current="page" href="<?= base_url ?>inicio/reportes">Reportes</a></li>
                </ul>
              </li>
            <?php endif; ?>

            <?php if (isset($_SESSION['identity'])) : ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Mi cuenta
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" aria-current="page" href="<?= base_url ?>usuario/profile">Perfil</a></li>
                  <li><a class="dropdown-item" aria-current="page" href="<?= base_url ?>usuario/profile">Listas</a></li>
                  <li><a class="dropdown-item" aria-current="page" href="<?= base_url ?>usuario/logout">Cerrar sesión</a></li>
                </ul>
              </li>
            <?php else : ?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?= base_url ?>usuario/ingresar">Ingresar</a>
              </li>
            <?php endif; ?>
          </ul>
          <form class="d-flex" >
            <input type="text" class="form-control me-2" placeholder="Buscar..." name="busqueda" aria-label="Search" autocomplete="off" pattern="^[a-zA-Z]+( [a-zA-Z]+)*$">
            <button class="btn btn-outline-info" type="submit" name="enviar" formaction="<?= base_url ?>inicio/search" formmethod="post">Search</button>
          </form>
        </div>
      </div>
    </nav>

  </header>

  <div>
    <svg class="waves1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
      </defs>
      <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="#f1f1f14d" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="#f1f1f180" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#f1f1f1" />
      </g>
    </svg>
  </div>

  <div class="content">