<?php


class authModel{

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=primerprototipo;charset=utf8', 'root', '');
    }
    public function newRegistro($email,$contraseña){
        $query = $this->db->prepare('INSERT INTO usuarios (email, contrasena) VALUES(?,?)');
        $query->execute([$email, $contraseña]);

    }

    public function getUser($email){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$email]);

        

        return $query->fetch(PDO::FETCH_OBJ);
        
    }
}