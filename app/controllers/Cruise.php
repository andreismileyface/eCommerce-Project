<?php 

class Cruise extends Controller {
    public function __construct()
    {
        $this->tripModel = $this->model('tripModel');
        $this->userModel = $this->model('userModel');
    }

    public function index() {
        if (!isset($_POST['submit'])) {
            $cruises = $this->tripModel->getAllCruises();

            return $this->view('Cruise/index', [
                "cruises" => $cruises
            ]);
        } else {
            $data = [
                "start" => $_POST['start'],
                "destination" => $_POST['destination']
            ];
            $cruises = $this->tripModel->getCruisesByStartAndDestination($data);

            return $this->view('Cruise/index', [
                "cruises" => $cruises,
                "filtered" => true,
                "start" => $_POST['start'],
                "destination" => $_POST['destination']
            ]);
        }
    }
}