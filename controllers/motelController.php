<?php

require_once 'models/motel.php';

//SE LLAMA EL MODELO QUE NOS PERMITIRA IMPRIMIR EN PANTALLA LAS HABITACIONES
//QUE SE ENCUENTRAN REGISTRADAS EN EL SISTEMA
require_once 'models/habitacion.php';

class motelController
{

	public function index()
	{
		Utils::isAdmin();
		$motel = new motel();
		$moteles = $motel->getAll();

		require_once 'views/layout/header2.php';
		require_once 'views/motel/index.php';
	}

	public function dirMotel()
	{
		$motel = new motel();
		$moteles = $motel->getAll();

		//var_dump($moteles->fetch_object());
		require_once 'views/layout/header2.php';
		require_once 'views/motel/dirmotel.php';
	}

	public function ver()
	{
		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			$motel = new motel();
			$motel->setId($id);
			$mot = $motel->getOne();

			//SE INVOCA EL MODELO JUNTO CON LA FUNCION
			//GETALL QUE NOS PERMITE IMPRIMIR LAS HABITACIONES DEL MOTEL
			$habitacion = new habitacion();
			$habitacion->setId($id);
			$habitaciones = $habitacion->getAllHabitacion();
		}
		//var_dump($moteles->fetch_object());
		require_once 'views/layout/header2.php';
		require_once 'views/motel/ver.php';
	}


	public function crear()
	{
		Utils::isAdmin();
		require_once 'views/layout/header2.php';
		require_once 'views/motel/crear.php';
	}

	public function save()
	{
		Utils::isAdmin();

		if (isset($_POST)) {
			$documento_rpta = isset($_POST['rpta']) ? $_POST['rpta'] : false;
			$nit = isset($_POST['nit']) ? $_POST['nit'] : false;
			$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
			$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
			$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
			$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
			$email = isset($_POST['email']) ? $_POST['email'] : false;

			if ($nit && $nombre && $direccion && $telefono && $email) {

				$motel = new motel();
				$motel->setDocumeto_rpta($documento_rpta);
				$motel->setNit($nit);
				$motel->setNombre($nombre);
				$motel->setDireccion($direccion);
				$motel->setDescripcion($descripcion);
				$motel->setTelefono($telefono);
				$motel->setEmail($email);

				//GUARDAR LA IMAGEN
				if (isset($_FILES['imagen'])) {
					$file = $_FILES['imagen'];
					$filename = $file['name'];
					$mimetype = $file['type'];

					if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png") {

						if (!is_dir('uploads/images/motel')) {
							mkdir('uploads/images/motel/', 0777, true);
						}

						move_uploaded_file($file['tmp_name'], 'uploads/images/motel/' . $filename);
						$motel->setImagen($filename);
					}
				}

				if (isset($_GET['id'])) {
					$id = $_GET['id'];
					$motel->setId($id);

					$save = $motel->edit();
				} else {
					$save = $motel->save();
				}

				if ($save) {
					$_SESSION['motel'] = "complete";
				} else {
					$_SESSION['motel'] = "failed";
				}
			} else {
				$_SESSION['motel'] = "failed";
			}
		} else {
			$_SESSION['motel'] = "failed";
		}
		header("Location:" . base_url . "motel/index");
	}

	public function editar()
	{
		Utils::isAdmin();
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$edit = true;

			$motel = new motel();
			$motel->setId($id);

			$mot = $motel->getOne();
			require_once 'views/layout/header2.php';
			require_once 'views/motel/crear.php';
		} else {
			header("Location:" . base_url . "motel/index");
		}
	}

	public function eliminar()
	{
		Utils::isAdmin();

		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			$motel = new motel();
			$motel->setId($id);

			$delete = $motel->delete();

			if ($delete) {
				$_SESSION['delete'] = "complete";
			} else {
				$_SESSION['delete'] = "failed";
			}
		} else {
			$_SESSION['delete'] = "failed";
		}

		header("Location:" . base_url . "motel/index");
	}
}
