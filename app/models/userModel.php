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
            $this->db->bind(':id', $data['user_id']);
           
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
            $this->db->bind(':id', $data['user_id']);
           
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

        public function deleteAllUserTrip($data){
            $this->db->query("DELETE FROM trip WHERE user_id=:user_id");
        
            $this->db->bind('user_id',$data['user_id']);
            
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function deleteAllUserReview($data){
            $this->db->query("DELETE FROM review WHERE user_id=:user_id");
        
            $this->db->bind('user_id',$data['user_id']);
            
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function deleteUserAllUserInfo($data){
            $this->db->query("DELETE FROM user WHERE id=:id");
        
            $this->db->bind('id',$data['id']);
            
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function deleteAllUserAbout($data){
            $this->db->query("DELETE FROM about WHERE user_id=:user_id");
        
            $this->db->bind('user_id',$data['user_id']);
            
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function deleteAllUserContactinfo($data){
            $this->db->query("DELETE FROM contactinfo WHERE user_id=:user_id");
        
            $this->db->bind('user_id',$data['user_id']);
            
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function deleteAllUsercontactReview($data){
            $this->db->query("DELETE FROM review WHERE user_id=:user_id");
        
            $this->db->bind('user_id',$data['user_id']);
            
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }public function deleteAllUsercontactCart($data){
            $this->db->query("DELETE FROM cart WHERE user_id=:user_id");
        
            $this->db->bind('user_id',$data['user_id']);
            
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }



        public function updateAboutText($data) {
            $this->db->query("UPDATE about SET text_about=:text_about WHERE user_id=:user_id");
            $this->db->bind(":text_about", $data['text_about']);
            $this->db->bind(':user_id', $data['user_id']);
    
            return $this->db->execute();
        }

        public function aboutText($data) {
            $this->db->query("INSERT INTO about (user_id, text_about) VALUES (:user_id, :text_about)");
            $this->db->bind(":user_id", $data['user_id']);
            $this->db->bind(":text_about", $data['text_about']);
    
            return $this->db->execute();
        }

        public function getAboutByUser($id) {
            $this->db->query("SELECT * FROM about WHERE user_id = :id");
            $this->db->bind(":id", $id);

            return $this->db->getSingle();
        }

    }
?>