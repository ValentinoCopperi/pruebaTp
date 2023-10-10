<?php
require_once './app/controller/home.controller.php';
require_once './app/controller/produc.controller.php';
require_once './app/controller/auth.controller.php';
require_once './app/controller/registro.controller.php';



define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'home'; // accion por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $controller = new homeController();
        $controller->showHome();
        break;
    case 'productos':
        $controller = new producController();
        $controller->showProductos();
        break;
    case 'monitores':
        $controller = new producController();;
        $controller->showProducPorCategoria($params[0]);
        break;
    case 'procesadores':
        $controller = new producController();;
        $controller->showProducPorCategoria($params[0]);
        break;
    case 'perifericos':
        $controller = new producController();
        $controller->showProducPorCategoria($params[0]);
        break;
    case 'login';
        $controller = new authController();
        $controller->showLogin();
        break;
    case 'newLogin';
        $controller = new authController();
        $controller->newLogin();
        break;
    case 'registro';
        $controller = new registroController();
        $controller->showRegistro();
        break;
    case 'newRegistro';
        $controller = new registroController();
        $controller->newRegistro();
        break;
    case 'logout':
        $controller = new authController();
        $controller->logout();
        break;
    default:
        echo 'error';
        break;
}
