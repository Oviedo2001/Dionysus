<?php

class Utils {

    public static function deleteSession($name) {
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    public static function isAdmin() {
        if (!isset($_SESSION['admin'])) {
            header("Location: " . base_url);
        } else {
            return true;
        }
    }

    public static function isIdentity() {
        if (!isset($_SESSION['identity'])) {
            header("Location:" . base_url);
        } else {
            return true;
        }
    }

    public static function showRepresentantes() {
        require_once 'models/representante.php';
        $rpta = new representante();
        $rptas = $rpta->getAll();
        return $rptas;
    }

    public static function showMoteles() {
        require_once 'models/motel.php';
        $motel = new motel();
        $moteles = $motel->getAll();
        return $moteles;
    }

}
