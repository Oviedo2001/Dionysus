<?php

class representante {

    private $id;
    private $documento_rpta;
    private $nombre_rpta;
    private $apellido_rpta;
    private $email_rpta;
    private $telefono_rpta;
    private $db;

    function __construct() {
        $this->db = Database::connect();
    }

    function getId() {
        return $this->id;
    }

    function getDocumento_rpta() {
        return $this->documento_rpta;
    }

    function getNombre_rpta() {
        return $this->nombre_rpta;
    }

    function getApellido_rpta() {
        return $this->apellido_rpta;
    }

    function getEmail_rpta() {
        return $this->email_rpta;
    }

    function getTelefono_rpta() {
        return $this->telefono_rpta;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setDocumento_rpta($documento_rpta): void {
        $this->documento_rpta = $this->db->real_escape_string($documento_rpta);
    }

    function setNombre_rpta($nombre_rpta): void {
        $this->nombre_rpta = $this->db->real_escape_string($nombre_rpta);
    }

    function setApellido_rpta($apellido_rpta): void {
        $this->apellido_rpta = $this->db->real_escape_string($apellido_rpta);
    }

    function setEmail_rpta($email_rpta): void {
        $this->email_rpta = $this->db->real_escape_string($email_rpta);
    }

    function setTelefono_rpta($telefono_rpta): void {
        $this->telefono_rpta = $this->db->real_escape_string($telefono_rpta);
    }

    public function save() {
        $sql = "INSERT INTO representante_legal VALUES(NULL, '{$this->getDocumento_rpta()}', '{$this->getNombre_rpta()}','{$this->getApellido_rpta()}', '{$this->getEmail_rpta()}', '{$this->getTelefono_rpta()}')";
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
        $sql = "UPDATE representante_legal SET documento_rpta = '{$this->getDocumento_rpta()}', nombre_rpta = '{$this->getNombre_rpta()}', apellido_rpta = '{$this->getApellido_rpta()}', email_rpta = '{$this->getEmail_rpta()}', telefono_rpta = '{$this->getTelefono_rpta()}' WHERE id={$this->id};";

        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function getAll() {
        $representantes = $this->db->query("SELECT * FROM representante_legal");
        return $representantes;
    }

    public function getOne() {
        $motel = $this->db->query("SELECT * FROM representante_legal WHERE id = {$this->getId()}");
        return $motel->fetch_object();
    }

    public function delete() {
        $sql = "DELETE FROM representante_legal WHERE id={$this->id}";

        $delete = $this->db->query($sql);

        $result = false;
        if ($delete) {
            $result = true;
        }
        return $result;
    }

}
