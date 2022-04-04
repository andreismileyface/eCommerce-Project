<?php

class Flight extends Controller {
    public function __construct()
    {
        $this->tripModel = $this->model('tripModel');
        $this->userModel = $this->model('userModel');
    }

    public function index() {
        if (isset($_POST['submit'])) {
            $data = [
                "start" => $_POST['start'],
                "destination" => $_POST['destination']
            ];

            $flights = $this->tripModel->getFlightsByStartAndDestination($data);
            return $this->view("Flight/index", [
                "trips" => $flights,
                "filtered" => true,
                "start" => $_POST['start'],
                "destination" => $_POST['destination']
            ]);
        }

        else {
            $trips = $this->tripModel->getAllFlights();
            $data = [
                "trips" => $trips
            ];

            return $this->view('Flight/index', $data);
        }
    }
}