<?php
require_once './app/model/auth.model.php';
require_once './app/views/auth.view.php';
require_once './app/helpers/auth.helper.php';
class authController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->view = new authView();
        $this->model = new authModel();
    }

    public function showLogin()
    {

        $this->view->showLogin();
    }

    public function newLogin()
    {
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];

        if (empty($email) || empty($contraseña)) {
            $this->view->showLogin("Faltan completar datos");
            return;
        }

        $user = $this->model->getUser($email);
        if($user && $contraseña == $user->contrasena){
            $this->view->showLogin("acceso concedido");

            session_start();
           $_SESSION['id'] = $user->id;
           $_SESSION['email'] = $user->email;

           //header('Location: ' . LOGIN);
           //die();

        }else{
            $this->view->showLogin("denegado");

        }


        /*
        if($user && password_verify($contraseña,($user->contraseña))){
            $this->view->showLogin("Acceso Concedido " . $user->email);
        }else{
            $this->view->showLogin("Error Datos");
        }
        */
    }

    public function logout() {
        AuthHelper::logout();
        header('Location: ' . BASE_URL);    
    }

    
}
