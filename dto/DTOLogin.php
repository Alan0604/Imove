<?php

 
class DTOLogin {
    private $usu_id;
    private $usu_email;
    private $usu_senha;
    
    function getUsu_id() {
        return $this->usu_id;
    }

    function getUsu_email() {
        return $this->usu_email;
    }

    function getUsu_senha() {
        return $this->usu_senha;
    }

    function setUsu_id($usu_id) {
        $this->usu_id = $usu_id;
    }

    function setUsu_email($usu_email) {
        $this->usu_email = $usu_email;
    }

    function setUsu_senha($usu_senha) {
        $this->usu_senha = $usu_senha;
    }


    
}
