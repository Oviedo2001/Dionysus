<?php

require_once 'models/habitacion.php';
require_once 'models/motel.php';

class habitacionController {

    public function lista() {
        Utils::isAdmin();

        $habitacion = new habitacion();
        $habitaciones = $habitacion->getAll();

        require_once 'views/layout/header2.php';
        require_once 'views/habitacion/lista_habi.php';
    }

    public function crear() {
        Utils::isAdmin();
        require_once 'views/layout/header2.php';
        require_once 'views/habitacion/crear_habitacion.php';
    }

    public function save() {
        Utils::isAdmin();

        if (isset($_POST)) {
            $motel_nit = isset($_POST['motel']) ? $_POST['motel'] : false;
            $nombre_habi = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $precio_habi = isset($_POST['precio']) ? $_POST['precio'] : false;
            $descripcion_habi = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;

            if ($motel_nit && $nombre_habi && $precio_habi && $descripcion_habi) {

                $habitacion = new habitacion();
                $habitacion->setMotel_nit($motel_nit);
                $habitacion->setNombre($nombre_habi);
                $habitacion->setPrecio($precio_habi);
                $habitacion->setDescripcion($descripcion_habi);

                if (isset($_FILES['imagen'])) {
                    $file = $_FILES['imagen'];
                    $filename = $file['name'];
                    $mimetype = $file['type'];

                    if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png") {

                        if (!is_dir('uploads/images/habitaciones')) {
                            mkdir('uploads/images/habitaciones/', 0777, true);
                        }

                        move_uploaded_file($file['tmp_name'], 'uploads/images/habitaciones/' . $filename);
                        $habitacion->setImagen($filename);
                    }
                }
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $habitacion->setId($id);
                    $save = $habitacion->edit();
                } else {
                    $save = $habitacion->save();
                }

                if ($save) {
                    $_SESSION['habitacion'] = "complete";
                } else {
                    $_SESSION['habitacion'] = "failed";
                }
            } else {
                $_SESSION['habitacion'] = "failed";
            }
        } else {
            $_SESSION['habitacion'] = "failed";
        }
        header("Location:" . base_url . "habitacion/lista");
    }

    public function editar() {
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $edit = true;

            $habitacion = new habitacion();
            $habitacion->setId($id);

            $habi = $habitacion->getOne();
            require_once 'views/layout/header2.php';
            require_once 'views/habitacion/crear_habitacion.php';
        } else {
            header("Location:" . base_url . "habitacion/lista");
        }
    }

    public function eliminar() {
        Utils::isAdmin();

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $habitacion = new habitacion();
            $habitacion->setId($id);

            $delete = $habitacion->delete();

            if ($delete) {
                $_SESSION['delete'] = "complete";
            } else {
                $_SESSION['delete'] = "failed";
            }
        } else {
            $_SESSION['delete'] = "failed";
        }

        header("Location:" . base_url . "habitacion/lista");
    }

}
