<?php

class Trip extends Controller {
    public function __construct()
    {
        $this->tripModel = $this->model('tripModel');
        $this->userModel = $this->model('userModel');
        $this->reviewModel = $this->model('reviewModel');
    }

    public function index() {

        return $this->view('Trip/index');
    }

    public function viewTrip($id) {
        $trip = $this->tripModel->getTrip($id);
        if (!isset($trip->trip_id)) { // if the trip doesnt exist
            echo '<meta http-equiv="Refresh" content="0; url=/eCommerce-Project/">';
        } else {
            if (!isset($_POST['submit'])) { // if viewing the trip
                $seller = $this->userModel->getUserById($trip->user_id);
                $reviews = $this->reviewModel->getTripReviews($id);

                // check if logged in user has already reviewed
                $userAlreadyReviewed = false;
                if (isLoggedIn()) {
                    $data = [
                        "trip_id" => $id,
                        "user_id" => $_SESSION['user_id']
                    ];
                    if (isset($this->reviewModel->getReviewByUserIdAndTripId($data)->review_id)) {
                        $userAlreadyReviewed = true;
                    }
                }

                return $this->view("Trip/view", [
                    "trip" => $trip,
                    "seller" => $seller,
                    "reviews" => $reviews,
                    "alreadyReviewed" => $userAlreadyReviewed
                ]);
            } else { // if submitting a review
                $data = [
                    'trip_id' => $id,
                    'user_id' => $_SESSION['user_id'],
                    'value' => $_POST['review'],
                    'message' => $_POST['message']
                ];

                if ($this->reviewModel->reviewTrip($data)) {
                    echo 'adding review to database...';
                    echo '<meta http-equiv="Refresh" content="0; url=/eCommerce-Project/Trip/viewTrip/'.$id.'">';
                }
            }
        }
    }

    public function edit($id) {
        if (!isset($_POST['submit'])) { // return the edit form
            $trip = $this->tripModel->getTrip($id);
            
            if (!isLoggedIn() || !isset($trip->trip_id) || $_SESSION['user_id'] != $trip->user_id) {
                echo 'You do not have permission to edit this';
                echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/Flight/viewTrip/'.$id.'">';
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
                echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/Trip/viewFlight/'.$id.'">';
            } else {

            }
        }
    }

    public function bookTrip($id){
        if (isset($_POST['submit'])){
            
        
        $data = [
            'number' => $_POST['number'],
            'id' => $id
        ];
        if ($this->tripModel->addTrip($data)) {
        echo 'Trip successfully added';
        $this->tripModel->addToCart($data);
        //$this->tripModel->sendToCart($data);
        echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/Cart">';
        }
    }

    }

    public function delete($id) {
        $trip = $this->tripModel->getTrip($id);
        if (!isLoggedIn() || !isset($trip->trip_id) || $_SESSION['user_id'] != $trip->user_id) {
            echo 'You do not have permission to delete this';
            echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/Trip/viewTrip/'.$id.'">';
        } else {
            if ($_SESSION['user_id'] != $trip->user_id) {
                echo 'You do not have permission to delete this';
                echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/Trip/viewTrip/'.$id.'">';
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