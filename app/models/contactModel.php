<?php

    class contactModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function createContact($data) {
            $this->db->query("INSERT INTO contactinfo (user_id, firstName, lastName, email, subject) VALUES (:user_id, :firstName, :lastName, :email, :subject)");
            $this->db->bind(":user_id", $data['user_id']);
            $this->db->bind(":firstName", $data['firstName']);
            $this->db->bind(":lastName", $data['lastName']);
            $this->db->bind(":email", $data['email']);
            $this->db->bind(":subject", $data['subject']);
    
            return $this->db->execute();
        }
    }
?>