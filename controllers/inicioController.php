<?php

class inicioController {

    public function index() {
        require_once 'views/layout/header.php';
        require_once 'views/inicio/inicio.php';
    }

    public function reportes() {
        require_once 'views/layout/header2.php';
        require_once 'views/inicio/reportes.php';
    }

}
