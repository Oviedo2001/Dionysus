<?php

require_once 'models/representante.php';

class representanteController {

    public function lista() {
        Utils::isAdmin();
        $rpta = new representante();
        $rptas = $rpta->getAll();

        require_once 'views/layout/header2.php';
        require_once 'views/representante/lista.php';
    }

    public function crear() {
        Utils::isAdmin();
        require_once 'views/layout/header2.php';
        require_once 'views/representante/registrar_rpta.php';
    }

    public function save() {
        Utils::isAdmin();

        if (isset($_POST)) {
            $documento_rpta = isset($_POST['doc_rpta']) ? $_POST['doc_rpta'] : false;
            $nombre_rpta = isset($_POST['nombre_rpta']) ? $_POST['nombre_rpta'] : false;
            $apellido_rpta = isset($_POST['apellido_rpta']) ? $_POST['apellido_rpta'] : false;
            $email_rpta = isset($_POST['email_rpta']) ? $_POST['email_rpta'] : false;
            $telefono_rpta = isset($_POST['telefono_rpta']) ? $_POST['telefono_rpta'] : false;

            if ($documento_rpta && $nombre_rpta && $apellido_rpta && $email_rpta && $telefono_rpta) {

                $representante = new representante();
                $representante->setDocumento_rpta($documento_rpta) ;
                $representante->setNombre_rpta($nombre_rpta);
                $representante->setApellido_rpta($apellido_rpta);
                $representante->setEmail_rpta($email_rpta);
                $representante->setTelefono_rpta($telefono_rpta);

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $representante->setId($id);
                    $save = $representante->edit();
                } else {
                    $save = $representante->save();
                }

                if ($save) {
                    $_SESSION['representante'] = "complete";
                } else {
                    $_SESSION['representante'] = "failed";
                }
            } else {
                $_SESSION['representante'] = "failed";
            }
        } else {
            $_SESSION['representante'] = "failed";
        }
        header("Location:" . base_url . "representante/lista");
    }

    public function editar() {
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $edit = true;

            $representante = new representante();
            $representante->setId($id);

            $rpta = $representante->getOne();
            require_once 'views/layout/header2.php';
            require_once 'views/representante/registrar_rpta.php';
        } else {
            header("Location:" . base_url . "representante/lista");
        }
    }

    public function eliminar() {
        Utils::isAdmin();

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $representante = new representante();
            $representante->setId($id);

            $delete = $representante->delete();

            if ($delete) {
                $_SESSION['delete'] = "complete";
            } else {
                $_SESSION['delete'] = "failed";
            }
        } else {
            $_SESSION['delete'] = "failed";
        }

        header("Location:" . base_url . "representante/lista");
    }
}

