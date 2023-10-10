<?php

class producModel{
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=primerprototipo;charset=utf8', 'root', '');
    }

    /**
     * Obtiene y devuelve de la base de datos todas las tareas.
     */
    function getProductos() {
        $query = $this->db->prepare('SELECT * FROM productos');
        $query->execute();

        // $tasks es un arreglo de tareas
        $productos = $query->fetchAll(PDO::FETCH_OBJ);

        return $productos;
    }

    public function getProductosPorCategoria($categoria){
        $query = $this->db->prepare('SELECT * FROM productos WHERE categoria = ?');
        $query->execute([$categoria]);

        // $tasks es un arreglo de tareas
        $productos = $query->fetchAll(PDO::FETCH_OBJ);

        return $productos;
    }

}