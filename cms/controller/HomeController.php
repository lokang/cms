<?php

/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 4/1/20
 * Time: 1:18 AM
 */
class HomeController extends Controller
{

    public function index(){
        $this->view('posts', 'Lokang');
    }

    public function register(){
        $user = new User();

        if($_POST){
            $user->register($_POST['name'], $_POST['email'], hash('sha512', $_POST['password']));
            $this->redirect('login.php');
            print_r($user);
        }
        $this->view('register', 'register');
    }

    public function login(){
        if($this->auth){
            $this->redirect('account.php');
        }
        if($_POST){
            $this->form('email', 'required|min:10|max:150');
            $this->form('password', 'required|min:3|max:10');
            $_users = new User();
            $user = $_users->get($_POST['email'], 'email');

            if($user && $user['password'] == hash('sha512', $_POST['password'])){
                setcookie('id', $user['id'], time()+3600*24*30, '/');
                setcookie('key', hash('sha512', $_POST['password']), time()+3600*24*30, '/');
                header('Location: index.php');
                exit;
            } else{
                $this->setError('Your details are incorrect');
                $this->back();
            }
        }
        $this->view('login', 'Login');
    }

    public function contact(){
        if(empty($_SESSION['random'])){
            $_SESSION['random'] = rand(11111,99999);
        }
        if($_POST){
            $this->form('email', 'required|min:10|max:150');
            $this->form('message', 'required|min:3|max:10000');
            $this->form('captcha', 'required|min:5|max:5');
            if($_POST['captcha'] == $_SESSION['random']){
                $this->sendEmail('info@lokang.com', 'Request from user on lokang.com', $_POST['message'], $_POST['email']);
                $this->redirect('home/index');
            }
            unset($_SESSION['random']);
            $this->redirect('contact');
        }
        $this->view('contact', 'Contact');
    }

    public function logout(){
        setcookie('id', false, -1, '/');
        setcookie('key', false, -1, '/');
        $this->redirect('login.php');
    }

    public function page(){
        $this->view('page', 'About');
    }

    public function passwordRecovery(){
        $user = new User();
        if($_POST){
            $userData = $user->get($_POST['email'], 'email');
            if($userData){
                $newPassword = $this->randomString();
                $user->update($userData['id'], $userData['name'], $userData['email'], hash('sha512', $newPassword));
                $this->sendEmail($userData['email'], 'Password recovery', 'Hello user, you requested password recovery. Your new password is ' . $newPassword);
                $this->setError('You requested password recovery. Check your email for more details');
                $this->redirect('login.php');
            }
        }
        $this->view('passwordRecovery');
    }
}