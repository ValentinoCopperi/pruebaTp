<?php
require_once './app/views/home.view.php';
require_once './app/helpers/auth.helper.php';

class homeController{

    private $view;

    public function __construct() {
        //AuthHelper::verify();
        $this->view = new HomeView();
    }

    public function showHome() {

        $this->view->showHome();

    }

   

}