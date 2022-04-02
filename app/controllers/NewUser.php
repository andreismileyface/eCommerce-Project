<?php

class NewUser extends Controller
{
    public function __construct()
    {
        $this->loginModel = $this->model('loginModel');
    }

public function index()
    {
        if(!isset($_POST['signup'])){
            $this->view('NewUser/index');
        }
        else{
            $user = $this->loginModel->getUser($_POST['signup']);
            if($user == null){
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
                if($this->validateData($data)){
                    if($this->loginModel->createUser($data)){
                        echo 'Please wait creating the account for '.trim($_POST['email']);
                        echo '<meta http-equiv="Refresh" content="2; url=Login">';
                 }
                } 
            }
            else{
                $data = [
                    'msg' => "User: ". $_POST['first_name'] ." already exists",
                ];
                $this->view('NewUser/index',$data);
            }
        }
    }

    public function validateData($data){
        if(empty($data['first_name'])){
            $data['firstName_error'] = 'First name can not be empty';
        }
        if (!filter_var($data['last_name'])) {
            $data['lastName_error'] = 'Please check your email and try again';
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $data['email_error'] = 'Please check your email and try again';
        }
        if(strlen($data['pass']) < 6){
            $data['password_len_error'] = 'Password can not be less than 6 characters';
        }
        if($data['pass'] != $data['pass_verify']){
            $data['password_match_error'] = 'Password does not match';
        }

        if(empty($data['firstName_error']) && empty($data['password_error']) && empty($data['password_len_error']) && empty($data['password_match_error'])){
            return true;
        }
        else{
            $this->view('NewUser/index',$data);
        }
    }
}