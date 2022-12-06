<?php

class motel {

    private $id;
    private $documento_rpta;
    private $nit;
    private $nombre;
    private $direccion;
    private $descripcion;
    private $telefono;
    private $email;
    private $imagen;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    function getId() {
        return $this->id;
    }

    function getDocumeto_rpta() {
        return $this->documento_rpta;
    }
    
    function getNit() {
        return $this->nit;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setDocumeto_rpta($documento_rpta): void {
        $this->documento_rpta = $this->db->real_escape_string($documento_rpta);
    }
    
    function setNit($nit): void {
        $this->nit = $this->db->real_escape_string($nit);
    }

    function setNombre($nombre): void {
        $this->nombre = $this->db->real_escape_string($nombre);
    }
    
    function setDireccion($direccion): void {
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    function setDescripcion($descripcion): void {
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    function setTelefono($telefono): void {
        $this->telefono = $this->db->real_escape_string($telefono);
    }

    function setEmail($email): void {
        $this->email = $this->db->real_escape_string($email);
    }

    function setImagen($imagen): void {
        $this->imagen = $imagen;
    }

    public function getAll() {
        $moteles = $this->db->query("SELECT * FROM motel");
        return $moteles;
    }
    
    public function getOne() {
        $motel = $this->db->query("SELECT * FROM motel WHERE id = {$this->getId()}");
        return $motel->fetch_object();
    }

    public function save() {
        $sql = "INSERT INTO motel VALUES(NULL,'{$this->getDocumeto_rpta()}', '{$this->getNit()}', '{$this->getNombre()}','{$this->getDireccion()}','{$this->getdescripcion()}', '{$this->getTelefono()}', '{$this->getEmail()}', '{$this->getImagen()}')";
        $save = $this->db->query($sql);

        //echo $this->db->error;
        //die();
        
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function edit() {
        $sql = "UPDATE motel SET documento_rpta = '{$this->getDocumeto_rpta()}', nit = '{$this->getNit()}', nombre = '{$this->getNombre()}', direccion = '{$this->getDireccion()}',descripcion = '{$this->getdescripcion()}', telefono = '{$this->getTelefono()}', email = '{$this->getEmail()}'";

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

    public function delete() {
        $sql = "DELETE FROM motel WHERE id={$this->id}";

        $delete = $this->db->query($sql);

        $result = false;
        if ($delete) {
            $result = true;
        }
        return $result;
    }

}
