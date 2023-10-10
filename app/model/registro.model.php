<?php


class registroModel{

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=primerprototipo;charset=utf8', 'root', '');
    }
    public function newRegistro($email,$contraseña){
        $query = $this->db->prepare('INSERT INTO usuarios (email, contrasena) VALUES(?,?)');
        $query->execute([$email, $contraseña]);

    }

   
}