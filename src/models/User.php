<?php

class User {
    private $id;
    private $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function save() {
        // Code to save the user to the database
    }

    public function find($id) {
        // Code to find a user by ID from the database
    }

    // Getters and setters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}