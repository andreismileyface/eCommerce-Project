<?php

    class publicationModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function createPost($data) {
            $this->db->query("INSERT INTO trip (user_id, name, max, date, price, description, start, destination) VALUES (:user_id, :name, :max, :date,:price, :description, :start,:destination)");
            $this->db->bind(":user_id", $data['user_id']);
            $this->db->bind(":name", $data['name']);
            $this->db->bind(":max", $data['max']);
            $this->db->bind(":date", $data['date']);
            $this->db->bind(":price", $data['price']);
            $this->db->bind("description", $data['description']);
            $this->db->bind("start", $data['start']);
            $this->db->bind("destination", $data['destination']);
    
            return $this->db->execute();
        }

        }
    
?>