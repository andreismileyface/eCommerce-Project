<?php

class User extends Controller {
    public function __construct()
    {
        $this->userModel = $this->model('userModel');
        $this->tripModel = $this->model('tripModel');
    }

    public function index($id) {
        $trips = $this->tripModel->getTrips($id);
        $data = [
            "trips" => $trips
        ];

        $this->view('User/index',$data);
    }

    public function delete($trip_id, $user_id){
       
        if($this->tripModel->deleteTrips($trip_id)){
            echo 'Please wait we are deleting the user for you!';
            //header('Location: /eCommerce-Project/User/index');
            echo '<meta http-equiv="Refresh" content=".4; url=/eCommerce-Project/">';
        }
    }

    public function update($trip_id){
        $user = $this->tripModel->getTrip($trip_id);
        if(!isset($_POST['update'])){
            $this->view('User/updateTrip',$user);
        }
        else{
           
            $data=[
                'start' => trim($_POST['start']),
                'destination' => trim($_POST['destination']),
                'price' => trim($_POST['price']),
                'max' => trim($_POST['max']),
                'date' => trim($_POST['date']),
                'description' => trim($_POST['description']),
                'name' => trim($_POST['name']),
                'trip_id' => $trip_id
            ];
            if($this->tripModel->editTrip($data)){
                echo 'Please wait we are updating the user for you!';
                //header('Location: /eCommerce-Project/User/index');
                echo '<meta http-equiv="Refresh" content="4; url=/eCommerce-Project">';
            }
            
        }
    }

    public function signin() {
        if(!isset($_POST['login'])){
            $this->view('User/signin');
        }
        else{
            $user = $this->userModel->getUser($_POST['Email']);
            
            if($user != null){
                $hashed_pass = $user->password_hash;
                $password = $_POST['Password'];
                if(password_verify($password,$hashed_pass)){
                    //echo '<meta http-equiv="Refresh" content="2; url=/MVC/">';
                    $this->createSession($user);
                    $data = [
                        'msg' => "Welcome, $user->email!",
                    ];
                    $this->view('Home/index',$data);
                }
                else{
                    $data = [
                        'msg' => "Password incorrect! for $user->email",
                    ];
                    $this->view('User/signin',$data);
                }
            }
            else{
                $data = [
                    'msg' => "Wrong credentials",
                ];
                $this->view('User/signin',$data);
            }
        }
    }

    public function signup()
    {
        if (!isset($_POST['signup'])) {
            $this->view('User/signup');
        } else {
            $user = $this->userModel->getUser($_POST['signup']);
            if ($user == null) {
                $data = [
                    'first_name' => trim($_POST['first_name']),
                    'last_name' => trim($_POST['last_name']),
                    'email' => $_POST['email'],
                    'pass' => $_POST['password'],
                    'pass_verify' => $_POST['verify_password'],
                    'password_hash' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                    'firstName_error' => '',
                    'lastName_error' => '',
                    'email_error' => '',
                    'password_error' => '',
                    'password_match_error' => '',
                    'password_len_error' => '',
                    'msg' => ''
                ];
                if ($this->validateData($data)) {
                    if ($this->userModel->createUser($data)) {
                        echo 'Please wait creating the account for ' . trim($_POST['email']);
                        echo '<meta http-equiv="Refresh" content="2; url=signin">';
                    }
                }
            } else {
                $data = [
                    'msg' => "User: " . $_POST['first_name'] . " already exists",
                ];
                $this->view('User/index', $data);
            }
        }
    }

    public function validateData($data)
    {
        if (empty($data['first_name'])) {
            $data['firstName_error'] = 'First name can not be empty';
        }
        if (!filter_var($data['last_name'])) {
            $data['lastName_error'] = 'Please check your email and try again';
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $data['email_error'] = 'Please check your email and try again';
        }
        if (strlen($data['pass']) < 6) {
            $data['password_len_error'] = 'Password can not be less than 6 characters';
        }
        if ($data['pass'] != $data['pass_verify']) {
            $data['password_match_error'] = 'Password does not match';
        }

        if (empty($data['firstName_error']) && empty($data['password_error']) && empty($data['password_len_error']) && empty($data['password_match_error'])) {
            return true;
        } else {
            $this->view('User/signup', $data);
        }
    }

    public function validatePass($data)
    {
        
        if (strlen($data['password']) < 6) {
            $data['password_len_error'] = 'Password can not be less than 6 characters';
        }
        if ($data['verify_password'] != $data['password']) {
            $data['password_match_error'] = 'Password does not match';
        }

        if (empty($data['password_len_error']) && empty($data['password_match_error'])) {
            return true;
        } else {
            return false;
        }
    }

    private function createSession($user){
        echo '<meta http-equiv="Refresh" content="0; url=/eCommerce-Project/">';
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_first_name'] = $user->first_name;
        
    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_first_name']);
        session_destroy();
        echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/">';
    }

    public function password() {
       $user = $_SESSION['user_id'];
     
       if(!isset($_POST['submit'])){
        $this->view('User/password');
    } else {
        $data = [
            'password' => $_POST['password'],
            'verify_password' => $_POST['verify_password'],
            "user_id" => $user
        ];
        if ($this->validatePass($data) != false) {
            $data2 =[
                'password_hash' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                "id" => $user
            ];
          
            if ($this->userModel->updateUser($data2)) {
                echo 'Please wait creating we are changing the password';
                echo '<meta http-equiv="Refresh" content="2; url=/eCommerce-Project/">';
            }
        }
    }
        
    }
}