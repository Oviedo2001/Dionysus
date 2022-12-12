<?php

class habitacion
{

  private $id;
  private $motel_nit;
  private $nombre;
  private $precio;
  private $descripcion;
  private $tipo_habitacion;
  private $imagen;
  private $db;

  public function __construct()
  {
    $this->db = Database::connect();
  }

  function getId()
  {
    return $this->id;
  }

  function getMotel_nit()
  {
    return $this->motel_nit;
  }

  function getNombre()
  {
    return $this->nombre;
  }

  function getPrecio()
  {
    return $this->precio;
  }

  function getDescripcion()
  {
    return $this->descripcion;
  }

  function getTipo_habitacion()
  {
    return $this->tipo_habitacion;
  }

  function getImagen()
  {
    return $this->imagen;
  }

  function setId($id): void
  {
    $this->id = $id;
  }

  function setMotel_nit($motel_nit): void
  {
    $this->motel_nit = $this->db->real_escape_string($motel_nit);
  }

  function setNombre($nombre): void
  {
    $this->nombre = $this->db->real_escape_string($nombre);
  }

  function setPrecio($precio): void
  {
    $this->precio = $this->db->real_escape_string($precio);
  }

  function setDescripcion($descripcion): void
  {
    $this->descripcion = $this->db->real_escape_string($descripcion);
  }

  function setTipo_habitacion($tipo_habitacion): void
  {
    $this->tipo_habitacion = $this->db->real_escape_string($tipo_habitacion);
  }

  function setImagen($imagen): void
  {
    $this->imagen = $imagen;
  }

  public function getAll()
  {
    $habitaciones = $this->db->query("SELECT * FROM habitacion");
    return $habitaciones;
  }

  public function getTwo()
  {
    $habitaciones = $this->db->query("SELECT * FROM habitacion ORDER BY id DESC LIMIT 3 ");
    return $habitaciones;
  }

  //FUNCION PARA QUE LAS HABITACIONES APAREZCAN EN EL RESPECTIVO
  //MOTEL EN LA QUE FUERON REGISTRADAS
  public function getAllHabitacion()
  {
    $sql = "SELECT * from motel m INNER JOIN habitacion h ON h.motel_nit = m.id WHERE m.id = {$this->getId()}";

    $habitaciones = $this->db->query($sql);
    return $habitaciones;
  }

  public function save()
  {
    $sql = "INSERT INTO habitacion VALUES(NULL,'{$this->getMotel_nit()}', '{$this->getNombre()}', '{$this->getPrecio()}','{$this->getDescripcion()}',1, '{$this->getImagen()}')";
    $save = $this->db->query($sql);

    //echo $this->db->error;
    //die();

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function edit()
  {
    $sql = "UPDATE habitacion SET motel_nit = '{$this->getMotel_nit()}', nombre = '{$this->getNombre()}', descripcion = '{$this->getDescripcion()}', precio = '{$this->getPrecio()}', tipo_habitacion = 2";

    if ($this->getImagen() != null) {
      $sql .= ", image = '{$this->getImagen()}'";
    }

    $sql .= " WHERE id={$this->id};";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  //FUNCION QUE CUMPLE EL OBJETIVO DE LLEVAR EL FORMULARIO
  //CON LA INFORMACION QUE SE VA A EDITAR
  public function getOne()
  {
    $habitaciones = $this->db->query("SELECT * FROM habitacion WHERE id = {$this->getId()}");
    return $habitaciones->fetch_object();
  }

  public function delete()
  {
    $sql = "DELETE FROM habitacion WHERE id={$this->id}";

    $delete = $this->db->query($sql);

    $result = false;
    if ($delete) {
      $result = true;
    }
    return $result;
  }
}
