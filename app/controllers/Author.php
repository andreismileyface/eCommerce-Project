<?php

class Author extends Controller
{
    public function __construct()
    {
        $this->authorModel = $this->model('authorModel');
        $this->profileModel = $this->model('profileModel');
    }

    public function signin()
    {
        if (!isset($_POST['submit'])) {
            return $this->view('Author/signin');
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $author = $this->authorModel->getAuthor(['username' => $username]);
            if (isset($author->author_id)) {
                if (password_verify($password, $author->password_hash)) {
                    $_SESSION['author_id'] = $author->author_id;
                    $_SESSION['author_username'] = $author->username;
                    
                    $profile = $this->profileModel->getProfileFromAuthor([ 'author_id' => $author->author_id ]);
                    if (isset($profile->profile_id)) {
                        $_SESSION['profile_id'] = $profile->profile_id;
                        echo '<meta http-equiv="refresh" content="0;url=http://localhost/eCommerce-Project/" />';
                    } else {
                        echo '<meta http-equiv="refresh" content="0;url=http://localhost/eCommerce-Project/profile/signup" />';
                    }
                } else {
                    $data = [
                        'msg' => 'Wrong credentials'
                    ];
                    return $this->view('Author/signin', $data);
                }
            } else {
                $data = [
                    'msg' => 'Wrong credentials'
                ];
                return $this->view('Author/signin', $data);
            }
        }
    }

    public function signup()
    {
        if (!isset($_POST['submit'])) {
            return $this->view('Author/signup');
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $data = [
                'username' => $username,
                'hashed_password' => $hashed_password
            ];

            echo 'creating author...';
            if ($this->authorModel->createAuthor($data)) {
                echo '<meta http-equiv="refresh" content=".5;url=http://localhost/eCommerce-Project/profile/signup" />';
            } else {
                $data = [
                    'msg' => 'This username is already taken'
                ];
                return $this->view('Author/signup', $data);
            }
        }
    }

    public function signout()
    {
        session_unset();
        session_destroy();
        echo '<meta http-equiv="refresh" content="0;url=http://localhost/eCommerce-Project/" />';
    }
}
