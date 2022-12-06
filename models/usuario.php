<?php

class usuario{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $rol;
    private $imagen;
    private $db;
    
    public function __construct() {
        $this->db = Database::connect();
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    function getRol() {
        return $this->rol;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setNombre($nombre): void {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setApellidos($apellidos): void {
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    function setEmail($email): void {
        $this->email = $this->db->real_escape_string($email);
    }

    function setPassword($password): void {
        $this->password = $password;
    }

    function setRol($rol): void {
        $this->rol = $rol;
    }

    function setImagen($imagen): void {
        $this->imagen = $imagen;
    }
    
    public function save() {
        $sql = "INSERT INTO usuarios VALUES(NULL,'{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'User', NULL)";
        
        $save = $this->db->query($sql);
        
        $result = false;
        if ($save) {
            $result=true;
        }
        return $result;
    }
    
    public function login() {
        $result= false;
        $email = $this->email;
        $password = $this->password;
        
        //Comprobar si existe
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $login = $this->db->query($sql);
        
        if($login && $login->num_rows == 1) {
            $usuario = $login->fetch_object();
            
            $verify = password_verify($password, $usuario->password);
            
            if($verify) {
                $result = $usuario;
            } 
        }
        
        return $result;
    }
}
