<?php

class errorController {
    public function index() {
        require_once 'views/layout/header2.php';
        echo "<h1>La pagina que buscas no existe</h1>";
    }
}