<?php
require_once './app/model/produc.model.php';
require_once './app/views/produc.view.php';

class producController{
    private $model;
    private $view;

    public function __construct() {

        //AuthHelper::verify();

        $this->view = new producView();
        $this->model = new producModel();
    }

    public function showProductos(){
        $productos = $this->model->getProductos();

        $this->view->showProductos($productos);
    }

    public function showProducPorCategoria($categoria){
        $productos = $this->model->getProductosPorCategoria($categoria);

        $this->view->showProducPorCategoria($productos);
    }
}

