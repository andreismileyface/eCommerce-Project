<?php

class authorModel extends Model {
    public function __construct()
    {
        $this->db = new Model;
    }

    public function getAll() {
        $this->db->query("SELECT * FROM author");
        
        return $this->db->getResultSet();
    }

    public function getAuthor($data) {
        $this->db->query("SELECT * FROM author WHERE username = :username");
        $this->db->bind(":username", $data['username']);

        return $this->db->getSingle();
    }

    public function createAuthor($data) {
        $this->db->query("INSERT INTO author (username, password_hash) VALUES (:username, :password_hash)");
        $this->db->bind(":username", $data['username']);
        $this->db->bind(":password_hash", $data['hashed_password']);

        return $this->db->execute();
    }
}