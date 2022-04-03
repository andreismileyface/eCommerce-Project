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

    public function viewCruise($id) {
        $cruise = $this->tripModel->getCruise($id);
        if (!isset($cruise->trip_id)) {
            echo '<meta http-equiv="Refresh" content="0; url=/eCommerce-Project/">';
        } else {
            $seller = $this->userModel->getUserById($cruise->user_id);

            return $this->view("Cruise/view", [
                "cruise" => $cruise,
                "seller" => $seller
            ]);
        }
    }
}