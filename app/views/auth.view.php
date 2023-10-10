<?php

class authView{
    public function showLogin($mensaje = null){
        require 'tempaltes/login.phtml';
    }

    public function showRegistro($error = null){
        require 'tempaltes/register.phtml';
    }
}