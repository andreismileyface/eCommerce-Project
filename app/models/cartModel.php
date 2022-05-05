<?php

    class cartModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function selectNumber($id){
            $this->db->query("SELECT number FROM cart WHERE cart_id = :cart_id");
            $this->db->bind(":cart_id", $id);

            return $this->db->getSingle();
        }


        public function remove($data) {
            $this->db->query("UPDATE trip SET max = max+:number WHERE trip_id=:trip_id");
            $this->db->bind(":number", $data['number']);
            $this->db->bind(":trip_id", $data['id']);

            return $this->db->execute();
        }

        public function getCart($id) {
            $this->db->query("SELECT * FROM cart WHERE cart_id = :cart_id");
            $this->db->bind(":cart_id", $id);

            return $this->db->getSingle();
        }
        

        public function deleteAllCart($user_id){
            $this->db->query("DELETE FROM cart WHERE user_id=:user_id");
            $this->db->bind('user_id',$user_id);
            
            return $this->db->execute();

        }


        public function deleteSingleCart($id){
            $this->db->query("DELETE FROM cart WHERE cart_id=:cart_id");
        
            $this->db->bind('cart_id', $id);
            
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function getAllCarts() {
            $this->db->query("SELECT * FROM cart where user_id=:user_id");
            $this->db->bind('user_id', $_SESSION['user_id']);
            return $this->db->getResultSet();
        }


        public function addPurchase($data){
            $this->db->query("INSERT INTO purchase (cart_id, user_id, number) values (:cart_id, :user_id, :number)");
            $this->db->bind(":number", $data['number']);
            $this->db->bind(":cart_id", $data['id']);
            $this->db->bind(":user_id", $data['user_id']);

            $this->db->execute();
        }
        

       
    }
    


?>