<?php

class Profile extends Controller
{
    public function __construct()
    {
        $this->profileModel = $this->model('profileModel');
    }

    public function signup()
    {
        if (!isLoggedIn()) {
            echo '<meta http-equiv="refresh" content="0;url=http://localhost/eCommerce-Project/" />';
        } else {
            if (!isset($_POST['submit'])) {
                return $this->view('Profile/signup');
            } else {
                $first_name = $_POST['first_name'];
                $middle_name = $_POST['middle_name'];
                $last_name = $_POST['last_name'];
                
                $data = [
                    'first_name' => $first_name,
                    'middle_name' => $middle_name,
                    'last_name' => $last_name,
                    'author_id' => $_SESSION['author_id']
                ];

                if ($this->profileModel->createProfile($data)) {
                    echo '<meta http-equiv="refresh" content=".5;url=http://localhost/eCommerce-Project/Author/signin" />';
                } else {

                }
            }
        }
    }

    public function index($id)
    {

        $profile = $this->profileModel->getProfile(['profile_id' => $id]);
    

        $data = [
            'profile' => $profile
        ];

        $this->view('Profile/index', $data);
    }
}

