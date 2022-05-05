<?php

    class tripModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function createTrip($data) {
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

        public function getTrip($id) {
            $this->db->query("SELECT * FROM trip WHERE trip_id = :trip_id");
            $this->db->bind(":trip_id", $id);

            return $this->db->getSingle();
        }

        public function getTrips($id) {
            
            $this->db->query("SELECT * FROM trip WHERE user_id = '$id'");
        

            return $this->db->getResultSet();
        }

        public function deleteTrips($id) {
            $this->db->query("DELETE FROM trip WHERE trip_id = '$id'");
            //$this->db->bind('$id', 'user_id');

            return $this->db->execute();
        }





        public function getAllCruises() {
            $this->db->query("SELECT * FROM trip WHERE name = 0");

            return $this->db->getResultSet();
        }

        public function getCruise($id) {
            $this->db->query("SELECT * FROM trip WHERE name = 0 AND trip_id = :trip_id");
            $this->db->bind(":trip_id", $id);

            return $this->db->getSingle();
        }

        public function getCruisesByStartAndDestination($data) {
            $this->db->query("SELECT * FROM trip WHERE name = 0 AND start = :start AND destination = :destination");
            $this->db->bind(":start", $data['start']);
            $this->db->bind(":destination", $data['destination']);

            return $this->db->getResultSet();
        }

        public function getAllFlights() {
            $this->db->query("SELECT * FROM trip WHERE name = 1");

            return $this->db->getResultSet();
        }

        public function getFlight($data) {
            $this->db->query("SELECT * FROM trip WHERE name = 1 AND trip_id = :trip_id");
            $this->db->bind(":trip_id", $data['trip_id']);

            return $this->db->getSingle();
        }

        public function getFlightsByStartAndDestination($data) {
            $this->db->query("SELECT * FROM trip WHERE name = 1 AND start = :start AND destination = :destination");
            $this->db->bind(":start", $data['start']);
            $this->db->bind(":destination", $data['destination']);

            return $this->db->getResultSet();
        }

        public function editTrip($data) {
            $this->db->query("UPDATE trip SET name=:name, max=:max, date=:date, price=:price, description=:description, start=:start, destination=:destination WHERE trip_id=:trip_id");
            $this->db->bind(":name", $data['name']);
            $this->db->bind(":max", $data['max']);
            $this->db->bind(":date", $data['date']);
            $this->db->bind(":price", $data['price']);
            $this->db->bind("description", $data['description']);
            $this->db->bind("start", $data['start']);
            $this->db->bind("destination", $data['destination']);
            $this->db->bind(":trip_id", $data['trip_id']);
    
            return $this->db->execute();
        }


        public function deleteTrip($id) {
            $this->db->query("DELETE FROM trip WHERE trip_id = :trip_id");
            $this->db->bind(":trip_id", $id);

            return $this->db->execute();
        }

        public function addTrip($data) {
            $this->db->query("UPDATE trip SET max = max-:number WHERE trip_id=:trip_id");
            $this->db->bind(":number", $data['number']);
            $this->db->bind(":trip_id", $data['id']);
          //  $this->addToCart($data);
            return $this->db->execute();
        }

        public function addToCart($data){
            $this->db->query("INSERT INTO cart (trip_id, user_id, number) values (:trip_id, :user_id, :number)");
            $this->db->bind(":number", $data['number']);
            $this->db->bind(":trip_id", $data['id']);
            $this->db->bind(":user_id", $_SESSION['user_id']);
        
            $this->db->execute();
        } 

        public function sentToCart($data){
            $this->db->query("SELECT description, start, destination, price FROM `finalproject`.`trip` WHERE `trip_id` = :trip_id");
            $this->db->bind(":trip_id", $data['id']);
            $this->db->execute();
        }

/*
        public function deleteTrip($id) {
            $this->db->query("DELETE FROM trip WHERE trip_id = :trip_id");
            $this->db->bind(":trip_id", $id);

            return $this->db->execute();
        }

        public function addTrip($id) {
            $this->db->query("UPDATE trip SET max=:max-1 WHERE trip_id=:trip_id");
            $this->db->bind(":max", $id['max']);
            $this->db->bind(":trip_id", $id);
            //$this->db->query("UPDATE trip SET max = 3 WHERE trip_id = 4");

            return $this->db->execute();
        }*/



    }
    
?>