<?php

class rating {

    private $id;
    private $rating;
    private $review;
    private $date;
    private $cliente_id;
    private $motel_id;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }
    
    function getId() {
        return $this->id;
    }

    function getRating() {
        return $this->rating;
    }

    function getReview() {
        return $this->review;
    }

    function getDate() {
        return $this->date;
    }

    function getCliente_id() {
        return $this->cliente_id;
    }

    function getMotel_id() {
        return $this->motel_id;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setRating($rating): void {
        $this->rating = $this->db->real_escape_string($rating);
    }

    function setReview($review): void {
        $this->review = $this->db->real_escape_string($review);
    }

    function setDate($date): void {
        $this->date = $date;
    }

    function setCliente_id($cliente_id): void {
        $this->cliente_id = $cliente_id;
    }

    function setMotel_id($motel_id): void {
        $this->motel_id = $motel_id;
    }



}
