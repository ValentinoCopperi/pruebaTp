<?php
require_once './app/model/registro.model.php';
require_once './app/views/registro.view.php';
class registroController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->view = new authView();
        $this->model = new authModel();
    }

 
    public function showRegistro()
    {
        $this->view->showRegistro();
    }

    public function newRegistro()
    {
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];

        if (empty($email) || empty($contraseña)) {
            $this->view->showRegistro("Faltan completar datos");
            return;
        }


        if (!empty($email) || !empty($contraseña)) {
            //$userPassword = password_hash($contraseña, PASSWORD_BCRYPT);
            $this->view->showRegistro("Registro Completo");
            $this->model->newRegistro($email, $contraseña);
        }
    }
}
