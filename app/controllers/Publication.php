<?php

class Publication extends Controller {
    public function __construct()
    {
        $this->publicationModel = $this->model('publicationModel');
    }

    public function createpost() {
        if (!isset($_POST['create'])) {
            $this->view('Publication/createpost');
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

            if ($this->publicationModel->createPost($data)) {
                echo '<meta http-equiv="refresh" content=".5;url=http://localhost/eCommerce-Project/" />';
            } else {

            }
        }
    }
}