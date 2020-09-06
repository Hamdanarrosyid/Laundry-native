<?php
class UsersController extends Controller{
    public function checkLogin()
    {
        if (isset($_SESSION['login'])){
            header('Location:javascript://history.go(-1)');
            exit;
        }
    }

    public function login()
    {
        $this->checkLogin();
        return $this->view('login');
    }
    public function loginProcess()
    {
        $this->checkLogin();
        if (isset($_POST)){
            if ($this->model('users')->login($_POST) > 0){
                header('Location:'.BASEURL);
            }else{
                echo 'gagal login';
            }
        }
    }
    public function register()
    {
        $this->checkLogin();
        return $this->view('register');
    }
    public function registerProcess()
    {
        $this->checkLogin();
        if (isset($_POST)){
            if ($_POST['password'] == $_POST['confirmpassword']){
                if ($this->model('users')->register($_POST) > 0){
                    header('Location:'.BASEURL.'users/login');
                }
            }else{
                header('Location:'.BASEURL.'users/register');
            }
        }
    }
    public function logout()
    {
        if (session_id()){
            session_destroy();
            header('Location:'.BASEURL);
        }
    }
}