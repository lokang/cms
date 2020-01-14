<?php

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->auth){
            $this->redirect('login.php');
        }
    }

    public function profile(){
        $user = new User();
//        $profile = $user->
        if($_POST){
            $newPassword = false;
            if(!empty($_POST['newPassword'])){
                $newPassword = hash('sha512', $_POST['newPassword']);
            }
            $user->update($this->auth['id'], $_POST['name'], $_POST['email'], $newPassword);
            $this->redirect('profile.php');
        }
        $this->view('profile');
    }

    public function destroy(){
        $user = new User();
        $user->destroy($this->auth['id']);
        setcookie('id', false, -1, '/');
        setcookie('key', false, -1, '/');
        $this->redirect('login.php');
    }

    public function destroyUser($userId){
        if(!$this->auth['id'] == 1){
            $this->redirect('/');
        }
        $user = new User();
        $user->destroy($userId);
        $this->redirect('users.php');
    }
    public function users(){
        $user = new User();
        $users = $user->getAll();
        if(!$this->auth['id'] == 1){
            $this->redirect('/');
        }
        $this->view('users', 'List of users', [
            'users' => $users
        ]);
    }

    public function account(){
        $user = new User();

        $this->view('account', 'account');
    }
}