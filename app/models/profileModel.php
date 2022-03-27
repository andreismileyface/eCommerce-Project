<?php

class profileModel extends Model {
    public function __construct()
    {
        $this->db = new Model;
    }

    public function getProfile($data) {
        $this->db->query("SELECT * FROM profile WHERE profile_id = :profile_id");
        $this->db->bind(":profile_id", $data['profile_id']);

        return $this->db->getSingle();
    }

    public function getProfileFromAuthor($data) {
        $this->db->query("SELECT * FROM profile WHERE author_id = :author_id");
        $this->db->bind(":author_id", $data['author_id']);

        return $this->db->getSingle();
    }
}