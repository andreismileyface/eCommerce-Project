<?php

    class userModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function getUser($email){
            $this->db->query("SELECT * FROM user WHERE email = :email");
            $this->db->bind(':email',$email);
            return $this->db->getSingle();
        }

        public function getUserById($id) {
            $this->db->query("SELECT * FROM user WHERE id = :id");
            $this->db->bind(":id", $id);

            return $this->db->getSingle();
        }

        public function updatePass($data){
            $this->db->query("UPDATE user SET password_hash=:password_hash WHERE id = :id");
            $this->db->bind(':password_hash', $data['password_hash']);
            $this->db->bind('id', $data['id']);
           
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function updateEmail($data){
            $this->db->query("UPDATE user SET email=:email WHERE id = :id");
            $this->db->bind(':email', $data['email']);
            $this->db->bind('id', $data['id']);
           
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function updateInfo($data){
            $this->db->query("UPDATE user SET first_name=:first_name, last_name=:last_name WHERE id = :id");
            $this->db->bind(':first_name', $data['first_name']);
            $this->db->bind(':last_name', $data['last_name']);
            $this->db->bind('id', $data['user_id']);
           
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function createUser($data){
            $this->db->query("INSERT INTO user (first_name, last_name, email, password_hash) values (:first_name, :last_name, :email, :password_hash)");
            $this->db->bind(':first_name', $data['first_name']);
            $this->db->bind(':last_name', $data['last_name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password_hash', $data['password_hash']);


            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }
?>