<?php

class Contact extends Controller {
    public function __construct()
    {
        $this->contactModel = $this->model('contactModel');
    }

    public function index() {
        if (!isset($_POST['submit'])) {
            $this->view('Contact/index');
        } else {
            echo 'hello world';
            $data = [
                'firstName' => trim($_POST['firstName']),
                'lastName' => trim($_POST['lastName']),
                'email' => trim($_POST['email']),
                'subject' => trim($_POST['subject']),
                'user_id' => $_SESSION['user_id']
            ];

            if ($this->contactModel->createContact($data)) {
                echo 'sending information...';
                echo '<meta http-equiv="refresh" content="4;url=http://localhost/eCommerce-Project/" />';
            } else {
                echo 'error';
                echo '<meta http-equiv="refresh" content="4;url=http://localhost/eCommerce-Project/" />';
            }
        }
    }
}