<?php

class Trip extends Controller {
    public function __construct()
    {
        $this->tripModel = $this->model('tripModel');
        $this->userModel = $this->model('userModel');
    }

    public function index() {

        return $this->view('Trip/index');
    }

    public function viewTrip($id) {
        $trip = $this->tripModel->getTrip($id);
        if (!isset($trip->trip_id)) {
            echo '<meta http-equiv="Refresh" content="0; url=/eCommerce-Project/">';
        } else {
            $seller = $this->userModel->getUserById($trip->user_id);

            return $this->view("Trip/view", [
                "trip" => $trip,
                "seller" => $seller
            ]);
        }
    }

    public function edit($id) {
        if (!isset($_POST['submit'])) { // return the edit form
            $trip = $this->tripModel->getTrip($id);
            
            if (!isLoggedIn() || !isset($trip->trip_id) || $_SESSION['user_id'] != $trip->user_id) {
                echo 'You do not have permission to edit this';
                echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/Flight/viewFlight/'.$id.'">';
            } else {
                return $this->view('Trip/edit', ['flight' => $trip]);
            }
        } else { // save into the db
            $data = [
                'name' => trim($_POST['name']),
                'description' => trim($_POST['description']),
                'price' => trim($_POST['price']),
                'date' => trim($_POST['date']),
                'max' => trim($_POST['max']),
                'start' => trim($_POST['start']),
                'destination' => trim($_POST['destination']),
                'trip_id' => $id
            ];

            if ($this->tripModel->editTrip($data)) {
                echo 'saving changes...';
                echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/Flight/viewFlight/'.$id.'">';
            } else {

            }
        }
    }

    public function delete($id) {
        $trip = $this->tripModel->getTrip($id);
        if (!isLoggedIn() || !isset($trip->trip_id) || $_SESSION['user_id'] != $trip->user_id) {
            echo 'You do not have permission to delete this';
            echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/Flight/viewFlight/'.$id.'">';
        } else {
            if ($_SESSION['user_id'] != $trip->user_id) {
                echo 'You do not have permission to delete this';
                echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/Flight/viewFlight/'.$id.'">';
            } else {
                if ($this->tripModel->deleteTrip($id)) {
                    echo 'Flight successfully deleted';
                    echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/">';
                }
            }
        }
    }

    public function create() {
        if (!isLoggedIn()) {
            echo '<meta http-equiv="refresh" content="0;url=http://localhost/eCommerce-Project/" />';
        }
        if (!isset($_POST['create'])) {
            $this->view('Trip/create');
        } else {
            $data = [
                'name' => trim($_POST['name']),
                'description' => trim($_POST['description']),
                'price' => trim($_POST['price']),
                'date' => trim($_POST['date']),
                'max' => trim($_POST['max']),
                'start' => trim($_POST['start']),
                'destination' => trim($_POST['destination']),
                'user_id' => $_SESSION['user_id']
            ];

            if ($this->tripModel->createTrip($data)) {
                echo 'creating trip...';
                echo '<meta http-equiv="refresh" content="1;url=http://localhost/eCommerce-Project/" />';
            } else {

            }
        }
    }
}