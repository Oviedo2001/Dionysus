<?php

require_once 'models/motel.php';
require_once 'models/habitacion.php';

class inicioController
{

  public function index()
  {
    $motel = new motel();
    $moteles = $motel->getThree();

    $habitacion = new habitacion();
    $habitaciones = $habitacion->getTwo();

    require_once 'views/layout/header.php';
    require_once 'views/inicio/inicio.php';
  }

  public function reportes()
  {
    require_once 'views/layout/header2.php';
    require_once 'views/inicio/reportes.php';
  }

  public function mapsite()
  {
    require_once 'views/layout/header2.php';
    require_once 'views/inicio/mapsite.php';
  }

  public function search()
  {

    $motel = new motel();
    $moteles = $motel->busqueda();

    require_once 'views/layout/header2.php';
    require_once 'views/inicio/resultsearch.php';
  }
}
